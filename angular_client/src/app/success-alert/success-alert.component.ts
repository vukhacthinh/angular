import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-success-alert',
  templateUrl: './success-alert.component.html',
  styleUrls: ['./success-alert.component.css']
})
export class SuccessAlertComponent implements OnInit {
  serverId: number=10;
  serverStatus: string='online';
  textTest = false;
  serverGet = ['serverGet','ServerSave'];
  serverTest = 'serverGet 2';
  constructor() {
  }
  ngOnInit(): void {
  }

  getStatusServer()
  {
    return this.serverStatus;
  }
  changeStatus()
  {
    this.textTest = true;
      this.serverGet.push(this.serverTest);
  }

}
