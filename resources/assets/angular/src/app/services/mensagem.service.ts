import {Injectable} from '@angular/core';
import {Headers, Http, Response} from "@angular/http";

@Injectable()
export class MensagemService {
    base_url: string;
    token = status;
    headers: Headers;

    constructor(private http: Http) {
        this.base_url = 'localhost:8000';
        this.token = localStorage.getItem('API_TOKEN');
        this.headers = new Headers({
            'Accept': 'application/json',
            'Authorization': `Bearer ${this.token}`,
        });
    }

    index() {
        const url = `//${this.base_url}/api/mensagens`;
        return this.http.get(url, {headers: this.headers})
            .toPromise()
            .then((response: Response) => response.json())
            .catch(this.handleError);
    }

    store(form) {
        const url = `//${this.base_url}/api/mensagens`;
        return this.http.post(url, form, {headers: this.headers})
            .toPromise()
            .then((response: Response) => response.json())
            .catch(this.handleError);
    }

    show(id) {
        const url = `//${this.base_url}/api/mensagens/${id}`;
        return this.http.get(url, {headers: this.headers})
            .toPromise()
            .then((response: Response) => response.json())
            .catch(this.handleError);
    }

    update(form, id) {
        const url = `//${this.base_url}/api/mensagens/${id}`;
        return this.http.put(url, form, {headers: this.headers})
            .toPromise()
            .then((response: Response) => response.json())
            .catch(this.handleError);
    }

    destroy(id) {
        const url = `//${this.base_url}/api/mensagens/${id}`;
        return this.http.delete(url, {headers: this.headers})
            .toPromise()
            .then((response: Response) => response.json())
            .catch(this.handleError);
    }

    handleError(error: any): Promise<any> {
        if (error.status === 401) {
            return Promise.reject('Unauthorized');
        }
        if (error.status === 403) {
            return Promise.reject('Forbidden');
        }
        return Promise.reject(error);
    }

}
