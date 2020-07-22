import { Component, OnInit } from '@angular/core';
import { EmployeeService } from '../_services';
import { PopupService } from '../_services';
import { from } from 'rxjs';
import {Employee} from '../_model';
import {MatDialog, MatDialogRef, MAT_DIALOG_DATA} from '@angular/material/dialog';
import { DialogDetailEmployee } from './detail/detail.component';
import { DialogAddEmployee } from './add/add.component';
import { DialogEditEmployee } from './edit/edit.component';
import { SwalPopup } from '../popup/swal.popup';

@Component({
  selector: 'app-employees',
  templateUrl: './employees.component.html',
  styleUrls: ['./employees.component.css']
})
export class EmployeesComponent implements OnInit {
  employees;
  listView;
  Enddata;
  animal: string;
  name: string;
  constructor(
    private EmployeeService:EmployeeService,
    private dialog: MatDialog,
    private PopupService: PopupService,
    private SwalPopup: SwalPopup,
  ) { }

  ngOnInit() {
    this.loadAllEmployees();
}

  public loadAllEmployees() {
      this.EmployeeService.getEmployee()
      .pipe()
      .subscribe(
          data => {
              this.employees= data;
          },
          error => {
            this.SwalPopup.opensweetalertdng();
          });
  }
   delete(id){
    this.PopupService.openConfirmationDialog().afterClosed().subscribe(result => {
      if(result) {
        this.EmployeeService.delete(id).pipe().subscribe(data=>{
          this.SwalPopup.opensweetalert();
          this.loadAllEmployees();
        },
        error => {
          alert('error');
        })
    }
      return null;
    });
  }
  view(id): void {
    this.EmployeeService.view(id).pipe().subscribe(data=>{
      const dialogRef = this.dialog.open(DialogDetailEmployee, {
        width: 'auto',
        height:'auto',
        data: data
      });
      dialogRef.afterClosed().subscribe(result => {
        this.animal = result;
      });
    },
    error => {
      alert('error');
    });
  }
  add(): void {
      const dialogRef = this.dialog.open(DialogAddEmployee, {
        width: 'auto',
        height:'auto',
      });
      dialogRef.afterClosed().subscribe(result => {
        this.loadAllEmployees();
      });
  }
  edit(id): void {
    this.EmployeeService.view(id).pipe().subscribe(data=>{
      const dialogRef = this.dialog.open(DialogEditEmployee, {
        width: 'auto',
        height:'auto',
        data: data
      });
      dialogRef.afterClosed().subscribe(result => {
        this.loadAllEmployees();
      });
    },
    error => {
      alert('error');
    });

  }
}
