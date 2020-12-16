import { Component, OnInit, OnDestroy } from '@angular/core';
import { error } from 'protractor';
import { Subscription } from 'rxjs';
import { first } from 'rxjs/operators';

import { User } from '../_model';
import { UserService, AuthenticationService } from '../_services';
import { EmployeeService } from '../_services';

@Component({ templateUrl: './company.html' ,styleUrls:['./company.component.css']})
export class CompanyComponent implements OnInit, OnDestroy {
    arr = [];
    lo:1;
    response ='';
    constructor(
      public EmployeeService : EmployeeService
    ) {

    }

    ngOnInit() {
      this.getCompanySection();
      console.log(this.getCompanySection());
    }

    ngOnDestroy() {
        // unsubscribe to ensure no memory leaks
    }
    public getCompanySection(response= '',elementId ='')
    {
      this.EmployeeService.getCompany().pipe().subscribe(
        data=>{
          if(response){
            data = response;
          }

          let index =0;
          // data.forEach(element => {
          //   if(index ==data.length){
          //     return false;
          //   }
          //   if(elementId){
          //     console.log(elementId);
          //     element.id = elementId;
          //   }
          //   // let result = data.filter(element => element.id == element.parent_id);
          //   // console.log({'ss':result});
          //   if(element.id == data[index].parent_id){

          //     let son = data[index];
          //     if(typeof son !='undefined'){
          //       element.children =  son;
          //       if(typeof this.arr[0] !='undefined'){
          //         this.arr[0]['children'] = son;
          //       }
          //       this.arr.push(element);
          //       this.getCompanySection(data,element.id);
          //       data.splice(index,1);
          //     }
          //   }
          //   index++;
          // });
          var map = {}, node, roots = [], i;

          for (i = 0; i < data.length; i += 1) {
            map[data[i].id] = i; // initialize the map
            data[i].children = []; // initialize the children
          }

          for (i = 0; i < data.length; i += 1) {
            node = data[i];
            if (node.parent_id !== "0") {
              // if you have dangling branches check that map[node.parentId] exists
              data[map[node.parent_id]].children.push(node);
            } else {
              roots.push(node);
            }
          }
          this.arr = data ? data :'';
          console.log(this.arr);
        },
        error=>{

        });
    }
}
