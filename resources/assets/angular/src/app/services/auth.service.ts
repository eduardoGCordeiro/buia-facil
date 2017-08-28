import {Injectable} from '@angular/core';
import {Headers, Http, Response} from "@angular/http";
import 'rxjs/add/operator/catch';
import 'rxjs/add/operator/toPromise';

@Injectable()
export class AuthService {
    base_url = 'localhost:8000';

    constructor(private http: Http) {
    }

    isLoggedIn() {
        return localStorage.getItem('API_TOKEN') ? true : false;
    }

    getToken() {
        return localStorage.getItem('API_TOKEN');
    }


    login(user): Promise<any> {
        const url = `//${this.base_url}/api/auth/login`;
        const headers = new Headers({'Accept': 'application/json'});

        return this.http.post(url, user, {headers: headers})
            .toPromise()
            .then((response: Response) => response.json())
            .catch(this.handleError);
    }

    create(user): Promise<any> {
        const url = `//${this.base_url}/api/auth/register`;

        return this.http.post(url, user)
            .toPromise()
            .then((response: Response) => response.json())
            .catch(this.handleError);
    }

    logout() {
        const url = `//${this.base_url}/api/auth/logout`;
        const headers = new Headers({
            'Accept': 'application/json',
            'Authorization': `Bearer ${this.getToken()}`
        });
        this.http.get(url)
            .toPromise()
            .then((response: Response) => {
                localStorage.removeItem('API_TOKEN');
                response.json();
            })
            .catch(this.handleError);
    }

    handleError(error: any): Promise<any> {
        if (error.status === 401) {
            return Promise.reject('Unauthorized');
        }
        if (error.status === 403) {
            return Promise.reject('Forbidden');
        }
        if (error.status === 419) {
            return Promise.reject(error.json());
        }
        return Promise.reject(error);
    }
}
