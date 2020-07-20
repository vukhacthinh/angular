import { Injectable } from '@angular/core';
import { HttpClient, HttpParams } from '@angular/common/http';
import { BehaviorSubject, Observable } from 'rxjs';
import { map } from 'rxjs/operators';

import { User, EmployeeDetail } from '../_model';
import { $ } from 'protractor';
import { ConfirmationDialog } from '../confirm-dialog/confirm-dialog.component';
import { SuccessDialog } from '../success-dialog/success-dialog.component';
import {MatDialog, MatDialogRef, MAT_DIALOG_DATA} from '@angular/material/dialog';

@Injectable({ providedIn: 'root' })
export class PopupService {

    public dialogRef: MatDialogRef<ConfirmationDialog,SuccessDialog>;
    private currentUserSubject: BehaviorSubject<User>;
    public currentUser: Observable<User>;

    constructor(
      private http: HttpClient,
      private dialog: MatDialog)
      {
        this.currentUserSubject = new BehaviorSubject<User>(JSON.parse(localStorage.getItem('currentUser')));
        this.currentUser = this.currentUserSubject.asObservable();
    }

    public get currentUserValue(): User {
        return this.currentUserSubject.value;
    }
    openConfirmationDialog() {
      this.dialogRef = this.dialog.open(ConfirmationDialog, {
        disableClose: false
      });
      this.dialogRef.componentInstance.confirmMessage = "Are you sure you want to delete?"

      // this.dialogRef.afterClosed().subscribe(result => {
      //   if(result) {
      //     // do confirmation actions
      //   }
      //   this.dialogRef = null;
      // });
      return this.dialogRef;
    }
    openSuccessDialog() {
      this.dialogRef = this.dialog.open(SuccessDialog, {
        disableClose: false
      });
      this.dialogRef.componentInstance.confirmMessage = "Thao tac thanh cong"

      // this.dialogRef.afterClosed().subscribe(result => {
      //   if(result) {
      //     // do confirmation actions
      //   }
      //   this.dialogRef = null;
      // });
      return this.dialogRef;
    }
}
