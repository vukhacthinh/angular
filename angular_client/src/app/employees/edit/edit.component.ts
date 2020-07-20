import {Component, Inject, OnInit, Output} from '@angular/core';
import {MatDialog, MatDialogRef, MAT_DIALOG_DATA} from '@angular/material/dialog';
import {EmployeeDetail} from '../../_model';
import { Observable, from } from 'rxjs';
import { FormControl, FormGroup,FormBuilder} from '@angular/forms';
import {EmployeeService} from '../../_services';
import {PopupService} from '../../_services/'

// export interface DialogData {
//   animal: string;
//   name: string;
//   employee_code:string;
// }

/**
 * @title Dialog Overview
 */
@Component({
  selector: 'edit-employees-edit',
  templateUrl: './edit.component.html',
  styles:[`
  .all-border{
    background-color:#f0ad4e;
  }
  `]
})
export class DialogEditEmployee implements OnInit{
  public currentUser: EmployeeDetail;
  formAddEmployee: FormGroup;
  // detail:DialogData;
  listDetail;
  constructor(
    public dialogRef: MatDialogRef<DialogEditEmployee>,
    public formClient: FormBuilder,
    public EmployeeService: EmployeeService,
    public PopupService:PopupService,
    @Inject(MAT_DIALOG_DATA) public data) {
      this.currentUser = data;
      this.formAddEmployee = this.formClient.group({
        // id: this.currentUser.id,
        employee_code: this.currentUser.employee_code,
        password: this.currentUser.password,
        family_name: this.currentUser.family_name,
        family_name_kana: this.currentUser.family_name_kana,
        first_name: this.currentUser.first_name,
        first_name_kana: this.currentUser.first_name_kana,
        employeement_status: this.currentUser.employeement_status,
        gender: this.currentUser.gender,
        address: this.currentUser.address,
        area_id: this.currentUser.area_id,
        birthday: this.currentUser.birthday,
        company_id: this.currentUser.company_id,
        company_section_id: this.currentUser.company_section_id,
        email: this.currentUser.email,
        join_date: this.currentUser.join_date,
        kengen_group_cd: this.currentUser.kengen_group_cd,
        leaving_date: this.currentUser.leaving_date,
        level: this.currentUser.level,
        mobile_tel: this.currentUser.mobile_tel,
      })
    }

  ngOnInit(){
    // let detail = this.data;
  }
  onNoClick(): void {
    this.dialogRef.close();
  }
  onclickFormEditEmployee(id)
  {
    this.EmployeeService.edit(id,this.formAddEmployee.value).pipe().subscribe(data=>{
      this.dialogRef.close();
      this.dialogRef.afterClosed().subscribe(result => {
        this.PopupService.openSuccessDialog();
      });
    },
    error =>{});
  }

}
