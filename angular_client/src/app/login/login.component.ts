import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { FormBuilder, FormGroup, Validators, FormControl } from '@angular/forms';
import { first } from 'rxjs/operators';
import { AlertService, AuthenticationService } from '../_services';

@Component({templateUrl: './login.component.html'})
export class LoginComponent implements OnInit {
    loginForm: FormGroup;
    loading = false;
    errorGet = false;
    submitted = false;
    returnUrl: string;

    constructor(
        private formBuilder: FormBuilder,
        private route: ActivatedRoute,
        private router: Router,
        private authenticationService: AuthenticationService,
        private alertService: AlertService
    ) {
        // redirect to home if already logged in
        if (this.authenticationService.currentUserValue) {
            this.router.navigate(['/']);
        }
    }

    ngOnInit() {
        this.loginForm = this.formBuilder.group({
            username: ['', Validators.required],
            password: ['', Validators.required],
        });
        // get return url from route parameters or default to '/'
        this.returnUrl = this.route.snapshot.queryParams['returnUrl'] || '/';
    }

    // convenience getter for easy access to form fields
    get f() { return this.loginForm.controls; }

    onSubmit() {
        this.submitted = true;
        // showSuccess();
        // stop here if form is invalid
        if (this.loginForm.invalid) {
            return;
        }
        this.loading = false;
        this.authenticationService.login(this.f.username.value, this.f.password.value)
            .pipe(first())
            .subscribe(
                data => {
                    this.loading = false;
                    this.router.navigate([this.returnUrl]);
                    this.errorGet = true;
                },
                error => {
                    this.alertService.error(error);
                    this.loading = false;
                    this.errorGet = true;
                });
        // this.authenticationService.getData().pipe(first())
        // .subscribe(
        //     data => {
        //       console.log(data);
        //         this.loading = false;
        //         this.router.navigate([this.returnUrl]);
        //         this.errorGet = true;
        //     },
        //     error => {
        //         this.alertService.error(error);
        //         this.loading = false;
        //         this.errorGet = true;
        //     });{

        // }
    }
}
