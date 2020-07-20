import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.html',
  styles: [`
  p{
    background-color:green;
    color:red;
    border:2px solid black;
  }
  .notthinh{
    color:white;
  }
  `]
})
export class DashBoardComponent implements OnInit{
  days = [];
  todayConvert = '';
  ngOnInit()
  {
    // console.log(this.getDaysInMonth(7,2020));
    this.days = this.getDaysInMonth(6,2020);
    console.log(this.days);
    // console.log(this.days);
    let today = new Date();
    let dd = String(today.getDate()).padStart(2, '0');
    let mm = String(today.getMonth()).padStart(2, '0'); //January is 0!
    let yyyy = today.getFullYear();

     this.todayConvert = dd+'/'+mm+'/'+yyyy;
    // console.log(todayConvert);
  }
  trArr: any[] = [
    {},{},{},{},{},{},{}
  ];
  tdArr: any[] = [

    {},{},{},{},{},{},{}
  ];

  // public getDaysInMonth(month, year) {
  //   var date = new Date(year, month, 1);
  //   var days = [];
  //   while (date.getMonth() === month) {
  //   for(let i = 0;i<31;i++)
  //   {
  //     this.days.push({'date':new Date().toJSON().slice(0,10).replace(/-/g,'/')});
  //   }
  //     days.push({new Date(date).toJSON().slice(0,10).replace(/-/g,'/') : });
  //     date.setDate(date.getDate() + 1);
  //   }
  //   return days;
  // }
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
