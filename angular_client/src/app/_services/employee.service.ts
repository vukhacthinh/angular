import { Injectable } from '@angular/core';
import { HttpClient, HttpParams, HttpHeaders } from '@angular/common/http';
import { BehaviorSubject, Observable } from 'rxjs';
import { map, toArray } from 'rxjs/operators';

import { User, EmployeeDetail } from '../_model';
import { $ } from 'protractor';
import {AppComponent} from '../app.component';

@Injectable({ providedIn: 'root' })
export class EmployeeService {
    private currentUserSubject: BehaviorSubject<User>;
    public currentUser: Observable<User>;
    public AppComponent: AppComponent;
    constructor(private http: HttpClient) {
        this.currentUserSubject = new BehaviorSubject<User>(JSON.parse(localStorage.getItem('currentUser')));
        this.currentUser = this.currentUserSubject.asObservable();
    }

    public get currentUserValue(): User {
        return this.currentUserSubject.value;
    }

    getEmployee() {
        return this.http.get(`http://localhost:8765/employees`)
            .pipe(map(user => {
                // login successful if there's a jwt token in the response
                if (user) {
                    // store user details and jwt token in local storage to keep user logged in between page refreshes
                    // localStorage.setItem('currentUser', JSON.stringify(user[0]));
                    // this.currentUserSubject.next(user[0]);
                    return user;
                }
            }));
    }
    httpParams = new HttpParams().set('id', '111');
    // httpParams.set('bbb', '222');
    options = { params : this.httpParams };
    delete(id :number) {
      return this.http.delete(`http://localhost:8765/employees/delete/${id}`);
        // remove user from local storage to log user out
    }
    view(id)
    {
      return this.http.get(`http://localhost:8765/employees/view/${id}`);
    }
    add(formAddEmployee)
    {

      let headers = new HttpHeaders({
        'Content-Type': 'application/json'
     });
     headers.append('Accept', 'application/json');

     headers.append('Access-Control-Allow-Origin', 'http://localhost:4200');
     headers.append('Access-Control-Allow-Credentials', 'true');

     headers.append('GET', 'POST')
      let options = {
      headers: headers
      }
      // var headers = new Headers();
      let urlSearchParams = new URLSearchParams();
      let form : FormData = new FormData();
      // form.append('aa',);
      // form.append('upload',fileToUpload, fileToUpload.name);
      // console.log(form);
      let body = formAddEmployee;
      // let body = JSON.stringify(formAddEmployee);
      // let body1 = Object.entries(body)
      return this.http.post<any>(`http://localhost:8765/employees/add`,body)
    }
    edit(id,formAddEmployee)
    {
      let body = formAddEmployee;
      // this.getCsrfToken().pipe().subscribe(data=>{
        // let headers = new HttpHeaders({'Content-Type': 'application/json','X-CSRF-Token' : data.csrfToken});
        return this.http.post<any>(`http://localhost:8765/employees/edit/${id}`,body);
      // });
    }
    logout()
    {
      localStorage.removeItem('currentUser');
      this.currentUserSubject.next(null);
    }
    getCsrfToken()
    {
      let headers = new HttpHeaders({'Content-Type': 'application/json'});
      return this.http.get<any>(`http://localhost:8765/employees/cookie`,{ headers, withCredentials: true }).toPromise();
    }
    getCheckOutIn(){
      let currentUser = JSON.parse(localStorage.getItem('currentUser'));
      let headers = new HttpHeaders({'Content-Type': 'application/json'});
      return this.http.get<any>(`http://localhost:8765/employees/syncTimeSheet/`+currentUser[0].id,{ headers, withCredentials: true });
    }
    checkin()
    {
      let currentUser = JSON.parse(localStorage.getItem('currentUser'));
      let headers = new HttpHeaders({'Content-Type': 'application/json'});
      return this.http.get<any>(`http://localhost:8765/employees/checkin/`+currentUser[0].id,{ headers, withCredentials: true });
    }
    checkout()
    {
      let currentUser = JSON.parse(localStorage.getItem('currentUser'));
      let headers = new HttpHeaders({'Content-Type': 'application/json'});
      return this.http.get<any>(`http://localhost:8765/employees/checkout/`+currentUser[0].id,{ headers, withCredentials: true });
    }
    getCompany()
    {
      let headers = new HttpHeaders({'Content-Type': 'application/json'});
      return this.http.get<any>(`http://localhost:8765/employees/company/`,{ headers, withCredentials: true });
    }
    savePost(data){
      let headers = new HttpHeaders({'Content-Type': 'application/json'});
      let currentUser = JSON.parse(localStorage.getItem('currentUser'));
      // data.push({'id':currentUser[0].id});
      data.employee_id = currentUser[0].id;
      console.log(data);
      return this.http.post<any>(`http://localhost:8765/employees/savePost/`,data);
    }
    getPost(employee_id){
      return this.http.get<any>(`http://localhost:8765/employees/getPost/`+employee_id);
    }
    pushComment(comment){
      return this.http.post<any>(`http://localhost:8765/employees/addComment/`,comment);
    }
    pushLike(){
      return this.http.get<any>(`http://localhost:8765/employees/addLike/`);
    }

}
