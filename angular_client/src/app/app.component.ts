import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { AuthenticationService } from './_services';
import { User } from './_model';
import {MatDialog, MatDialogRef, MAT_DIALOG_DATA} from '@angular/material/dialog';
import { Observable } from 'rxjs';

@Component({ selector: 'app-root', templateUrl: 'app.component.html',styleUrls:['./app.component.css']})
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
        let headers = new HttpHeaders({'Content-Type': 'application/json'});
      //   let csrfToken = this.http.get<any>(`http://localhost:8765/employees/cookie`,{ headers, withCredentials: true }).pipe().subscribe(data=>{
      //     let headers2 = new HttpHeaders({
      //       'Content-Type': 'application/json'
      //     });
      //     return data;
      //     console.log(data.csrfToken);
      //   });
      // console.log(csrfToken);
    }

      public logout() {
        this.authenticationService.logout();
        this.router.navigate(['/login']);
      }
      public formatDate(date) {
        var d = new Date(date),
            month = '' + (d.getMonth() + 1),
            day = '' + d.getDate(),
            year = d.getFullYear();

        if (month.length < 2)
            month = '0' + month;
        if (day.length < 2)
            day = '0' + day;

        return [year, month, day].join('-');
      }
}
