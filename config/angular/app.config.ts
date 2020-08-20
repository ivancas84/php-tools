import { HttpHeaders } from '@angular/common/http';

export const HTTP_OPTIONS = {
  headers: new HttpHeaders({
        'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'
    })
};

export const UPLOAD_URL = 'upload/';
export const API_URL = 'api/';


