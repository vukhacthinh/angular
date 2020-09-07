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

// export interface DialogData {
//   animal: string;
//   name: string;
//   employee_code:string;
// }

/**
 * @title Dialog Overview
 */
@Component({
  selector: 'app-dashboard-add',
  templateUrl: './add.component.html',
  styles:[`
  .all-border{
    background-color:#5cb85c;
  }
  `]
})
export class DialogAddTimeSheet{
  formAddEmployee: FormGroup;
  loading = false;
  constructor(
    public http:HttpClient,
    public dialogRef: MatDialogRef<DialogAddTimeSheet>,
    public formClient: FormBuilder,
    public SwalPopup: SwalPopup,
    private fb: FormBuilder,
    @Inject(MAT_DIALOG_DATA) public data) {
      // this.currentUser = data;
      // form = new FormData;
      this.formAddEmployee = this.formClient.group({
        employee_code:[''],
        password:['']
      });
    }
  // employee:{employee_code:'data.dddd'}
  ngOnInit(): void {
    this.formAddEmployee = this.formClient.group({
      employee_code: ['', [Validators.required]],
      password: ['', [Validators.required, Validators.minLength(6)]]
    });
  }
  get f() { return this.formAddEmployee.controls; }
  onNoClick(): void {
    this.dialogRef.close();
  }
  saveTimeSheet()
  {
    console.log('ss');
  }
}
