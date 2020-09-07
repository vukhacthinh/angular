import { Component, Input } from '@angular/core';
import {MatDialog, MatDialogRef, MAT_DIALOG_DATA} from '@angular/material/dialog';

@Component({
  selector: 'app-error-dialog',
  templateUrl: './error-dialog.html',
  styles:['./error-dialog.component.css']
})
export class ErrorDialog {
  constructor(public dialogRef: MatDialogRef<ErrorDialog>) {}

  public confirmMessage:string;
  
}
