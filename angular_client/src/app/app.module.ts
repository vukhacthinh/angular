import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';
import { fakeBackendProvider } from './_helpers';

import { appRoutingModule } from './app.routing';
import { AppComponent } from './app.component';
import { SuccessAlertComponent } from './success-alert/success-alert.component';
import { WarningAlertComponent } from './warning-alert/warning-alert.component';
import { LoginComponent } from './login';
import { HomeComponent } from './home';
import { ReactiveFormsModule } from '@angular/forms';
import { EmployeesComponent } from './employees/employees.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { MatDialogModule } from '@angular/material/dialog';
import { DialogDetailEmployee } from './employees/detail/detail.component';
import { DialogAddEmployee } from './employees/add/add.component';
import { ConfirmationDialog } from './confirm-dialog/confirm-dialog.component';
import { SuccessDialog } from './success-dialog/success-dialog.component';
import { ErrorDialog } from './error-dialog/error-dialog.component';
import { DialogEditEmployee } from './employees/edit/edit.component';
import { DashBoardComponent } from './dashboard/dashboard.component';
import { SwalPopup } from './popup/swal.popup';
import { MaterialModule } from './material.module';
import { ForbiddenValidatorDirective } from './employees/validator/forbidden-name.directive';
import { DialogAddTimeSheet } from './dashboard/add/add.component';
import { CompanyComponent } from './company/company.component';
import { ProfileEmployee } from './employees/profile/profile.component';
@NgModule({
  declarations: [
    AppComponent,
    SuccessAlertComponent,
    WarningAlertComponent,
    LoginComponent,
    HomeComponent,
    EmployeesComponent,
    DialogDetailEmployee,
    DialogAddEmployee,
    ConfirmationDialog,
    SuccessDialog,
    ErrorDialog,
    DialogEditEmployee,
    DashBoardComponent,
    ForbiddenValidatorDirective,
    DialogAddTimeSheet,
    CompanyComponent,
    ProfileEmployee
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpClientModule,
    appRoutingModule,
    ReactiveFormsModule,
    BrowserAnimationsModule,
    MatDialogModule,
    MaterialModule
  ],
  providers: [fakeBackendProvider],
  bootstrap: [AppComponent],
  entryComponents: [ConfirmationDialog]
})
export class AppModule { }
