import { Component, OnInit, OnDestroy } from '@angular/core';
import { Subscription } from 'rxjs';
import { first } from 'rxjs/operators';

import { User } from '../_model';
import { UserService, AuthenticationService } from '../_services';

@Component({ templateUrl: 'home.component.html' })
export class HomeComponent implements OnInit, OnDestroy {
    currentUser: User;
    currentUserSubscription: Subscription;
    users: User[] = [];
    days = [];
    todayConvert = '';
    trArr: any[] = [
      {},{},{},{},{},{},{}
    ];
    tdArr: any[] = [

      {},{},{},{},{},{},{}
    ];
    constructor(
        private authenticationService: AuthenticationService,
        private userService: UserService
    ) {
        this.currentUserSubscription = this.authenticationService.currentUser.subscribe(user => {
            this.currentUser = user;
        });
    }

    ngOnInit() {
        // this.loadAllUsers();
        this.days = this.getDaysInMonth(6,2020);
        let today = new Date();
        let dd = String(today.getDate()).padStart(2, '0');
        let mm = String(today.getMonth()).padStart(2, '0'); //January is 0!
        let yyyy = today.getFullYear();

         this.todayConvert = dd+'/'+mm+'/'+yyyy;
    }

    ngOnDestroy() {
        // unsubscribe to ensure no memory leaks
        this.currentUserSubscription.unsubscribe();
    }
  public getDaysInMonth(month, year) {
    var date = new Date(year, month,1);
    var days = [];
    while (date.getMonth() === month) {
      days.push({'date':new Date(date).toJSON().slice(0,10).replace(/-/g,'/')});
      date.setDate(date.getDate() + 1);
    }
    return days;
  }
}
