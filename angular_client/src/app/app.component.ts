import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { AuthenticationService } from './_services';
import { User } from './_model';
import {MatDialog, MatDialogRef, MAT_DIALOG_DATA} from '@angular/material/dialog';
import { Observable } from 'rxjs';

@Component({ selector: 'app-root', templateUrl: 'app.component.html'})
export class AppComponent {
    currentUser: User;
    dataR = '';
    constructor(
        private http: HttpClient,
        private router: Router,
        private authenticationService: AuthenticationService,
        public dialog: MatDialog
    ) {
        this.authenticationService.currentUser.subscribe(x => this.currentUser = x);
        // let headers = new HttpHeaders({'Content-Type': 'application/json'});
        // let csrfToken = this.http.get<any>(`http://localhost:8765/employees/cookie`,{ headers, withCredentials: true }).pipe().subscribe(data=>{
        //   let headers2 = new HttpHeaders({
        //     'Content-Type': 'application/json'
        //   });
        //   return data;
        // });
    }

      public logout() {
        this.authenticationService.logout();
        this.router.navigate(['/login']);
      }
      // public getCsrfCookie(token = 'csrfToken') {
      // let csrfToken = this.http.get<any>(`http://localhost:8765/login`);
      // console.log(csrfToken);
      // const value = `; ${document.cookie}`;
      // const parts = value.split(`; ${token}=`);
      // if (parts.length === 2) return parts.pop().split(';').shift();
      // }
}
