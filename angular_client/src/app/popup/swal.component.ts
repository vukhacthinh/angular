
import { Component } from '@angular/core';
import { Router } from '@angular/router';
import {MatDialog, MatDialogRef, MAT_DIALOG_DATA} from '@angular/material/dialog';
import Swal from 'sweetalert2/dist/sweetalert2.js';

@Component({ selector: 'app-popup'})

export class SwalComponent {
  constructor() {}

  public confirmMessage:string;
  public opensweetalert()
  {
    Swal.fire({
        text: 'Hello!',
        icon: 'success'
      });
  }
  public opensweetalertdng()
  {
   Swal.fire('Oops...', 'Something went wrong!', 'error')
  }

  public opensweetalertcst(){
    Swal.fire({
      title: 'Are you sure?',
      text: 'You will not be able to recover this imaginary file!',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'No, keep it'
    }).then((result) => {
      if (result.value) {
      Swal.fire(
        'Deleted!',
        'Your imaginary file has been deleted.',
        'success'
      )
      // For more information about handling dismissals please visit
      // https://sweetalert2.github.io/#handling-dismissals
      } else if (result.dismiss === Swal.DismissReason.cancel) {
      Swal.fire(
        'Cancelled',
        'Your imaginary file is safe :)',
        'error'
      )
      }
    })
  }
}

