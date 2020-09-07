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
  // items =Array<string>;
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
        width: '500px',
        height:'900px',
        data: data
      });
      dialogRef.afterClosed().subscribe(result => {
        this.animal = result;
      });
    },
    error => {
      alert('error');
    });
    // this.EmployeeService.view(id).then(items=> this.items = items);
  }
  add(): void {
      const dialogRef = this.dialog.open(DialogAddEmployee, {
        width: '500px',
        height:'900px',
      });
      dialogRef.afterClosed().subscribe(result => {
        this.loadAllEmployees();
      });
      let promise  = new Promise((returnTrue,returnFalse)=>{
        let a = 1;
        let b = 2;
        if(a + b ==3){
          returnTrue('Return True');
        }
        else{
          returnFalse('Break');
        }
      });
      promise.then((val) => console.log(val))      // logs the resolve argument
       .catch((val) => console.log(val));
  }
  edit(id): void {
    this.EmployeeService.view(id).pipe().subscribe(data=>{
      const dialogRef = this.dialog.open(DialogEditEmployee, {
        width: '500px',
        height:'900px',
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
  getToken() : void{
    // this.EmployeeService.getCsrfToken().pipe().subscribe(data=>{
    //   console.log(data.csrfToken);
    //   });
  }
}
