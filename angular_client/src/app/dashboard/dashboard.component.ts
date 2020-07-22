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
    this.days = this.getDaysInMonth(6,2020);
    const firstDateCalendar = this.days[0];
    const lastDateCalendar = this.days.slice(-1).pop();
    const firstDay = new Date(firstDateCalendar.getFullYear(), firstDateCalendar.getMonth(), 1);
    var lastDay = new Date(lastDateCalendar.getFullYear(), lastDateCalendar.getMonth() + 1, 0);
    let yesterday = new Date();
    let firstArr = [];
    let lastArr = [];
    for(let i = 0;i <= firstDay.getDay(); i++)
    {
      let abc = firstDay.setDate(firstDay.getDate() - 1)
      firstArr.push(new Date(abc));
      firstArr = firstArr.reverse();
    }
    let letDay = lastDay.getDay();
    if(letDay ==0){
      letDay = 6;
    }
    for(let i = 0;i < (7 - letDay); i++)
    {
      let abc = lastDay.setDate(lastDay.getDate() + 1)
      lastArr.push(new Date(abc));
      // lastArr = lastArr.reverse();
    }
    let abcd = firstArr.concat(this.days);
    let abcde = abcd.concat(lastArr);
    this.days = abcde;

  }
  trArr: any[] = [
    {},{},{},{},{}
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
      date.setDate(date.getDate() + 1);
    }
    return days;
  }
  // public setDayOfWeek()
  // {
  //   let arrayRandom = this.trArr.push(this.days);
  // }

}
