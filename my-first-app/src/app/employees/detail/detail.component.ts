import {Component, Inject, OnInit, Output} from '@angular/core';
import {MatDialog, MatDialogRef, MAT_DIALOG_DATA} from '@angular/material/dialog';
import {EmployeeDetail} from '../../_model';
import { Observable } from 'rxjs';

// export interface DialogData {
//   animal: string;
//   name: string;
//   employee_code:string;
// }

/**
 * @title Dialog Overview
 */
@Component({
  selector: 'app-employees-detail',
  templateUrl: './detail.component.html',
  styles:[`
  .all-border{
    background-color:#5bc0de;
  }
  `]
})
export class DialogDetailEmployee{
  public currentUser: EmployeeDetail;
  // detail:DialogData;
  listDetail;
  constructor(
    public dialogRef: MatDialogRef<DialogDetailEmployee>,
    @Inject(MAT_DIALOG_DATA) public data) {
      this.currentUser = data;
    }

  // ngOnInit(){
  //   let detail = this.data;
  // }
  onNoClick(): void {
    this.dialogRef.close();
  }

}
