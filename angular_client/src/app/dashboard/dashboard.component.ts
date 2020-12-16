import { Component, OnInit } from '@angular/core';
import {FormControl} from '@angular/forms';
import {MomentDateAdapter, MAT_MOMENT_DATE_ADAPTER_OPTIONS} from '@angular/material-moment-adapter';
import {DateAdapter, MAT_DATE_FORMATS, MAT_DATE_LOCALE} from '@angular/material/core';
import {MatDatepicker} from '@angular/material/datepicker';
import {MatDialog, MatDialogRef, MAT_DIALOG_DATA} from '@angular/material/dialog';
import {DialogAddTimeSheet} from './add/add.component';
import {EmployeeService} from '../_services/employee.service';

// Depending on whether rollup is used, moment needs to be imported differently.
// Since Moment.js doesn't have a default export, we normally need to import using the `* as`
// syntax. However, rollup creates a synthetic default module and we thus need to import it using
// the `default as` syntax.
import * as _moment from 'moment';
// tslint:disable-next-line:no-duplicate-imports
import {default as _rollupMoment, Moment} from 'moment';
import { isBuffer } from 'util';
import { from } from 'rxjs';
import { stringify } from 'querystring';
import { element, error } from 'protractor';

const moment = _rollupMoment || _moment;
export const MY_FORMATS = {
  parse: {
    dateInput: 'MM/YYYY',
  },
  display: {
    dateInput: 'MM/YYYY',
    monthYearLabel: 'MMM YYYY',
    dateA11yLabel: 'LL',
    monthYearA11yLabel: 'MMMM YYYY',
  },
};
@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.html',
  styleUrls: ['./dashboard.component.css'],
  providers: [
    // `MomentDateAdapter` can be automatically provided by importing `MomentDateModule` in your
    // application's root module. We provide it at the component level here, due to limitations of
    // our example generation script.
    {
      provide: DateAdapter,
      useClass: MomentDateAdapter,
      deps: [MAT_DATE_LOCALE, MAT_MOMENT_DATE_ADAPTER_OPTIONS]
    },

    {provide: MAT_DATE_FORMATS, useValue: MY_FORMATS},
  ],
})
export class DashBoardComponent implements OnInit{
  days = [];
  Arrdays = [];
  dateInput = '';
  currentTime = new Date();
  monthPicker = new FormControl(this.currentTime);
  monthCurrent = this.currentTime.getMonth();
  yearCurrent = this.currentTime.getFullYear();
  dateWhenOnchange = new Date();
  constructor(
    public dialog: MatDialog,
    public EmployeeService:EmployeeService
    // public DialogAddTimeSheet: DashBoardComponent
  ) {

  }
  ngOnInit()
  {
    this.khoiTao(this.monthCurrent,this.yearCurrent,this.monthPicker.value);
    this.callCheckInOutServer();
  }
  trArr: any[] = [
    {},{},{},{},{},{}
  ];
  tdArr: any[] = [
    {},{},{},{},{},{},{}
  ];
  Array = [];
  public getDaysInMonth(month, year) {
    var date = new Date(year, month,1);
    var days = [];
    while (date.getMonth() === month) {
      days.push(new Date(date));
      new Date(date.setDate(date.getDate() + 1)).setUTCDate;
    }
    return days;
  }
  public khoiTao(monthCurrent,yearCurrent,monthPicker){
    this.EmployeeService.getCheckOutIn().pipe().subscribe(data=>{

      this.days = this.getDaysInMonth(parseInt(monthCurrent),parseInt(yearCurrent));
      let firstDateCalendar = this.days[0];
      console.log(firstDateCalendar);
      let lastDateCalendar = this.getDaysInMonth(monthCurrent,yearCurrent).slice(-1).pop();
      const firstOfCalendar = this.getMondayOfWeek(firstDateCalendar);
      const tempstr = this.getMondayOfWeek(firstDateCalendar);
      let firstArrCalendar = [];
      let lastArr = [];
      let countLoopFirstArr = firstDateCalendar.getDay();
      if(countLoopFirstArr == 0){
        countLoopFirstArr = 7;
      }
      for(let i= 0; i<countLoopFirstArr-1;i++){
        let str = tempstr.setDate(firstOfCalendar.getDate() + i);
        firstArrCalendar.push(new Date(str));

      }
      console.log(firstArrCalendar);
      let now = monthPicker;
      if (now.getMonth() == 11) {
          var currentDate = new Date(now.getFullYear() + 1, 0, 1);
      } else {
          var currentDate = new Date(now.getFullYear(), now.getMonth() + 1, 1);
      }
      let totalTDCalendar = 42;
      let abcd = firstArrCalendar.concat(this.days);
      for(let i = 0;i < totalTDCalendar-abcd.length; i++)
      {
        let end = currentDate.setDate(1 + i);
        lastArr.push(new Date(end));
      }

      let abcde = abcd.concat(lastArr);
      this.days = abcde;
      let index = 0;
      let shiftMo = (data[0].replace(':','')).split("-");
      let shiftTu = (data[1].replace(':','')).split("-");
      let shiftWe = (data[2].replace(':','')).split("-");
      let shiftTh = (data[3].replace(':','')).split("-");
      let shiftFr = (data[4].replace(':','')).split("-");
      let shiftSa = (data[5].replace(':','')).split("-");
      let shiftSu = (data[6].replace(':','')).split("-");
      this.days.forEach(element => {
        let newElement = this.formatDate(element);
        let today = this.formatDate(new Date);
        let currentTimePick = new Date();
        let endTime = String(currentTimePick.getHours()) + String(currentTimePick.getMinutes());
        let startTime = 0;

        if(data[newElement]){
          startTime = (data[newElement].check_in).replace(":","");
        }
        if(data[newElement] && data[newElement].check_out){
          endTime = (data[newElement].check_out).replace(":","");
        }
        this.Arrdays[index] =
        {
          'date':new Date(element).getDate(),
          'data':(data[newElement]? data[newElement]:''),
          'today':newElement==today ? 'Today' :'',
          'shift':{
            0:data[0],
            1:data[1],
            2:data[2],
            3:data[3],
            4:data[4],
            5:data[5],
            6:data[6]},
          'width_time_line': data[newElement] ? (parseInt(endTime)-startTime)/10 :0,
          'margin_time_line':{
            0: (startTime - (startTime == 0 ? 0 :shiftMo[0]))/10 +20,
            1: (startTime - (startTime == 0 ? 0 :shiftTu[0]))/10 +20,
            2: (startTime - (startTime == 0 ? 0 :shiftWe[0]))/10 +20,
            3: (startTime - (startTime == 0 ? 0 :shiftTh[0]))/10 +20,
            4: (startTime - (startTime == 0 ? 0 :shiftFr[0]))/10 +20,
            5: (startTime - (startTime == 0 ? 0 :shiftSa[0]))/10 +20,
            6: (startTime - (startTime == 0 ? 0 :shiftSu[0]))/10 +20,},
          'month_current': this.getMonthCurrent(newElement,monthCurrent,yearCurrent)
        };
        index++;
      });
    },

    error => {
    });
  }

  changeMonth(event): void {
    this.khoiTao(event.value._i.month,event.value._i.year,event.value._d);
    this.dateWhenOnchange = event.value._d;
  }
  changeInputMonth(event){
    let varSplit = event._i.split('/');
    this.khoiTao(varSplit[0]-1,varSplit[1],new Date('01/'+event._i));
  }
  nextBackMonth(params) {
    if('_d' in this.currentTime){
      this.currentTime =  new Date(this.dateWhenOnchange);
    }
    if(params == 'next'){
      var getMon =this.currentTime.getMonth() +1;
      if(getMon ==12){
        getMon = 0;
        this.currentTime = new Date(this.yearCurrent +=1,0,1);
      }
      else{
        this.currentTime =  new Date(this.currentTime.setMonth(getMon));
      }
      this.khoiTao(getMon,this.yearCurrent,this.currentTime);
    }else{
      let getMon = this.currentTime.getMonth()-1;
      if(getMon ==-1){
        getMon = 11;
        this.currentTime = new Date(this.yearCurrent -=1,11,1);
      }
      else{
        this.currentTime =  new Date(this.currentTime.setMonth(getMon));
      }
      this.khoiTao(getMon,this.yearCurrent,this.currentTime);
    }
  }
  public getMondayOfWeek(dayParam){
    let d = new Date(dayParam);
    let day = d.getDay(),
        diff = d.getDate() - day + (day == 0 ? -6:1); // adjust when day is sunday
    return new Date(d.setDate(diff));
  }
  timeSheet()
  {
    const dialogRef = this.dialog.open(DialogAddTimeSheet, {
      width: '500px',
      height:'900px'
    });
    dialogRef.afterClosed().subscribe(result => {
      // this.animal = result;
    });
  }
  // convertToDay(date){
  //   let d = new Date(date);
  //   if(d.toLocaleDateString() == new Date().toLocaleDateString()){
  //     return 'Today';
  //   }
  //   return d.getDate();
  // }
  public callCheckInOutServer(){

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
  public getMonthCurrent(date,monthCurrent,yearCurrent){
    let monthCurrentHere = this.getDaysInMonth(monthCurrent,yearCurrent);
    let abc = '';
    monthCurrentHere.forEach(element=>{
      if(this.formatDate(element) == date){
        abc = 'month_current';
      }
      // else{
      //   abc = 'true';
      // }
    });
    return abc;
  }
  checkin(){
    this.EmployeeService.checkin().pipe().subscribe(data=>{
    },
    error=>{
    })
  }
  checkout(){
    this.EmployeeService.checkout().pipe().subscribe(data=>{
    },
    error=>{
    })
  }
}
