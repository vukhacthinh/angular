import { Component } from '@angular/core';

@Component({
  selector: 'app-warning-alert',
  templateUrl: './warning-alert.component.html',
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
export class WarningAlertComponent{
  example = '';
  textTest = false;
  serverId = 10;
 allowNewServer = false;
 serverTest = 'test Success';
 serverGet = ['serverTest', 'serverTest Here'];
 constructor(){
   setTimeout(() => {
    this.allowNewServer = true;
   }, 2000);
   this.serverTest = Math.random() > 0.5 ? 'thinh' : 'notthinh' ;
 }
 thinh = '';
 onChangeInput(event: Event)
 {

    this.thinh = (event.target as HTMLInputElement).value;
 }
 clickWhen()
 {
    this.serverGet.push(this.serverTest);
 }
 getColor()
 {
   return this.serverTest === 'thinh' ? 'yellow' :'blue';
 }
}
