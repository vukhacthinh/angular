import {Component, Inject, OnInit, Output} from '@angular/core';
import {MatDialog, MatDialogRef, MAT_DIALOG_DATA} from '@angular/material/dialog';
import {EmployeeDetail} from '../../_model';
import { Observable, from } from 'rxjs';
import { HttpClient, HttpParams } from '@angular/common/http';
import { EmployeeService } from '../../_services';
import { FormGroup, FormControl, FormBuilder } from '@angular/forms';
import {SwalPopup} from '../../popup/index'

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
  public currentUser: EmployeeDetail;
  // detail:DialogData;
  listDetail;
  formAddEmployee: FormGroup;
  constructor(
    public http:HttpClient,
    public dialogRef: MatDialogRef<DialogAddEmployee>,
    public EmployeeService: EmployeeService,
    public formClient: FormBuilder,
    public SwalPopup: SwalPopup,
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
      })
    }
  // ngOnInit(){
  //   let detail = this.data;
  // }
  onNoClick(): void {
    this.dialogRef.close();
  }
  onclickFormAddEmployee()
  {
    this.EmployeeService.add(this.formAddEmployee.value).pipe().subscribe(data=>{
      this.dialogRef.close();
      this.dialogRef.afterClosed().subscribe(result => {
        this.SwalPopup.opensweetalert();
      });
    },
    error => {
    });
  }

}
