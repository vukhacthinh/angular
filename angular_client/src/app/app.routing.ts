import { Routes, RouterModule } from '@angular/router';

import { HomeComponent } from './home';
import { LoginComponent } from './login';
import { AuthGuard } from './_helpers';
import { EmployeesComponent } from './employees/employees.component';
import { DashBoardComponent } from './dashboard/dashboard.component';
import { CompanyComponent } from './company/company.component';
import { ProfileEmployee } from './employees/profile/profile.component';

const routes: Routes = [
    { path: '', component: HomeComponent, canActivate: [AuthGuard] },
    { path: 'login', component: LoginComponent },
    { path: 'employees', component: EmployeesComponent },
    { path: 'dashboard', component: DashBoardComponent },
    { path: 'company', component: CompanyComponent },
    { path: 'profile', component: ProfileEmployee },

    // otherwise redirect to home
    { path: '**', redirectTo: '' }
];

export const appRoutingModule = RouterModule.forRoot(routes);
