import {Component, Inject, OnInit, Output,ElementRef, ViewChild} from '@angular/core';
import { FormGroup, FormControl, FormBuilder,Validators } from '@angular/forms';
import { error } from 'protractor';
import { from } from 'rxjs';
import {EmployeeService} from '../../_services/employee.service';

// export interface DialogData {
//   animal: string;
//   name: string;
//   employee_code:string;
// }

/**
 * @title Dialog Overview
 */
@Component({
  selector: 'app-employees-profile',
  templateUrl: './profile.html',
  styleUrls:[`profile.component.css`]
})
export class ProfileEmployee implements OnInit{
  formAddEmployee: FormGroup;
  formAddComment: FormGroup;
  formAddLike: FormGroup;
  conditionLiked =false;
  text= '';
  allPost = '';
  currentUser= [];
  imgCheckIsset = false;
  showComment = false;
  constructor(
    public formClient: FormBuilder,
    public EmployeeService: EmployeeService,
    ) {
    this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
    this.formAddEmployee = this.formClient.group({
      content:[''],
      file:[''],
      // location:[''],
    });
    this.formAddComment = this.formClient.group({
      comment:[''],
      employee_post_id:[''],
      file:[''],
      created_by:[''],
      // location:[''],
    });
    this.formAddLike = this.formClient.group({
      type:[''],
      employee_post_id:[''],
      created_by:[''],
      // location:[''],
    });
  }
  ngOnInit(): void {
    this.formAddEmployee = this.formClient.group({
      content: ['', [Validators.required]],
      file: ['', [Validators.required]],
      // location: ['', [Validators.required]],
    });
    this.formAddComment = this.formClient.group({
      comment:[''],
      employee_post_id:[''],
      file:[''],
      created_by:[JSON.parse(localStorage.getItem('currentUser'))[0].id]
      // location:[''],
    });
    this.formAddLike = this.formClient.group({
      type:[''],
      employee_post_id:[''],
      created_by:[JSON.parse(localStorage.getItem('currentUser'))[0].id]
      // location:[''],
    });
    this.loadPost();
  }
  get f() { return this.formAddEmployee.controls; }
  onclickFormAddEmployee(){
    // console.log(this.formAddEmployee);
    this.EmployeeService.savePost(this.formAddEmployee.value).pipe().subscribe( data=>{
      this.loadPost();
    },
    error =>{

    });
  }
  fileTag(event){
    if(event.target.files.length > 0) {
      this.imgCheckIsset = true;
      let filesSelected = event.target.files[0];
      let fileReader = new FileReader();
      fileReader.onload= (fileLoadedEvent) => {

        let srcData = fileLoadedEvent.target.result; // <--- data: base64
        let newImg = document.createElement('img');
        newImg.src = srcData as string;
        this.text = fileReader.result as string;
        return srcData;

      };
      fileReader.readAsDataURL(filesSelected);
    // console.log(filesSelected);

    }
  }
  public loadPost(){
    let currentUser = JSON.parse(localStorage.getItem('currentUser'));
    let employee_id = currentUser[0].id;
    this.EmployeeService.getPost(employee_id).pipe().subscribe(data=>{
      this.allPost = data;

    },error=>{

    });
  }
  public removeImg(){
    this.imgCheckIsset = false;
  }
  public comment(){
    this.showComment = true;
  }
  public replyPost(id){
    let currentUser = JSON.parse(localStorage.getItem('currentUser'));
    let employee_id = currentUser[0].id;
    this.formAddComment.patchValue({
      employee_post_id:id,
      created_by:employee_id
    });
    this.EmployeeService.pushComment(this.formAddComment.value).pipe().subscribe(data=>{
      this.loadPost();
      this.formAddComment.reset();
    },error=>{

    });
  }
  public like(id){
    this.conditionLiked = !this.conditionLiked;
    // let currentUser = JSON.parse(localStorage.getItem('currentUser'));
    // let employee_id = currentUser[0].id;
    // this.formAddLike.patchValue({
    //   employee_post_id:id,
    //   created_by:employee_id
    // });
    // console.log(this.formAddLike.value);
    // this.EmployeeService.pushLike().pipe().subscribe(data=>{
    //   this.loadPost();
    //   this.formAddComment.reset();
    // },error=>{

    // });
  }
}
