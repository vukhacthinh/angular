import { Component, Input } from '@angular/core';
import {MatDialog, MatDialogRef, MAT_DIALOG_DATA} from '@angular/material/dialog';

@Component({
  selector: 'app-success-dialog',
  templateUrl: './success-dialog.html',
  styles:['./success-dialog.component.css']
})
export class SuccessDialog {
  constructor(public dialogRef: MatDialogRef<SuccessDialog>) {}

  public confirmMessage:string;
}
