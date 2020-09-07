import {Component, Inject, OnInit, Output,ElementRef, ViewChild} from '@angular/core';
import {MatDialog, MatDialogRef, MAT_DIALOG_DATA} from '@angular/material/dialog';
import {EmployeeDetail} from '../../_model';
import { Observable, from } from 'rxjs';
import { HttpClient, HttpParams } from '@angular/common/http';
import { EmployeeService } from '../../_services';
import { FormGroup, FormControl, FormBuilder,Validators } from '@angular/forms';
import {SwalPopup} from '../../popup/index'
import { callbackify } from 'util';
import { stringify } from 'querystring';
import { forbiddenNameValidator } from '../validator/forbidden-name.directive';

// export interface DialogData {
//   animal: string;
//   name: string;
//   employee_code:string;
// }

/**
 * @title Dialog Overview
 */
@Component({
  selector: 'app-employees-add',
  templateUrl: './add.component.html',
  styles:[`
  .all-border{
    background-color:#5cb85c;
  }
  `]
})
export class DialogAddEmployee{
  @ViewChild('avatar') avatar: ElementRef;
  public currentUser: EmployeeDetail;
  // detail:DialogData;
  listDetail;
  fileToUpload: File = null;
  formAddEmployee: FormGroup;
  baseConvert= '';
  text: string;
  loading = false;
  constructor(
    public http:HttpClient,
    public dialogRef: MatDialogRef<DialogAddEmployee>,
    public EmployeeService: EmployeeService,
    public formClient: FormBuilder,
    public SwalPopup: SwalPopup,
    private fb: FormBuilder,
    @Inject(MAT_DIALOG_DATA) public data) {
      // this.currentUser = data;
      // form = new FormData;
      this.formAddEmployee = this.formClient.group({
        employee_code:[''],
        password:[''],
        family_name:[''],
        family_name_kana:[''],
        first_name:[''],
        first_name_kana:[''],
        employeement_status:[''],
        gender:[''],
        address:[''],
        area_id:[''],
        birthday:[''],
        company_id:[''],
        company_section_id:[''],
        email:[''],
        join_date:[''],
        kengen_group_cd:[''],
        leaving_date:[''],
        level:[''],
        mobile_tel:[''],
        avatar_id:[''],
      });
    }
  // employee:{employee_code:'data.dddd'}
  ngOnInit(): void {
    this.formAddEmployee = this.formClient.group({
      employee_code: ['', [Validators.required]],
      password: ['', [Validators.required, Validators.minLength(6)]],
      family_name: ['', [Validators.required]],
      family_name_kana: ['', [Validators.required]],
      first_name: ['', [Validators.required]],
      first_name_kana: ['', [Validators.required]],
      employeement_status: ['', [Validators.required]],
      gender: ['', [Validators.required]],
      address: ['', [Validators.required]],
      company_id: ['', [Validators.required]],
      area_id: ['', [Validators.required]],
      birthday: ['', [Validators.required]],
      company_section_id: ['', [Validators.required]],
      email: ['', [Validators.required]],
      join_date: ['', [Validators.required]],
      kengen_group_cd: ['', [Validators.required]],
      mobile_tel: ['', [Validators.required]],
      avatar_id: ['', [Validators.required]],
      leaving_date: ['', [Validators.required]],
      level: ['', [Validators.required]]
    });
  }
  get f() { return this.formAddEmployee.controls; }
  onNoClick(): void {
    this.dialogRef.close();
  }
  onclickFormAddEmployee()
  {
    this.loading = true;
    if (this.formAddEmployee.invalid) {
      return;
    }
    this.EmployeeService.add(this.formAddEmployee.value).pipe().subscribe(data=>{
      if(data.status == 200){
        this.dialogRef.close();
          this.SwalPopup.opensweetalert();
      }
      else{
        this.dialogRef.afterClosed().subscribe(result => {
          this.SwalPopup.opensweetalertdng();
        });
      }
    },
    error => {
    });
  }
  handleFileInput(event) {
    if(event.target.files.length > 0) {
      let filesSelected = event.target.files[0];
      let fileReader = new FileReader();
      fileReader.onload= (fileLoadedEvent) => {

        let srcData = fileLoadedEvent.target.result; // <--- data: base64
        // var newImg = new Image();
        let newImg = document.createElement('img');
        newImg.src = srcData as string;
        this.text = fileReader.result as string;
        return srcData;

      };
      fileReader.readAsDataURL(filesSelected);
    }
  }
}
