import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Contrat } from '../models/contrat';

@Injectable({
  providedIn: 'root'
})
export class ContratService {

  private apiUrl = 'http://127.0.0.1:8000';

  constructor(private http: HttpClient) { }

  getAll(): Observable<Contrat> {
    return this.http.get<Contrat>(`${this.apiUrl}/contrat`);
  }

  getById(id: number): Observable<any> {
    return this.http.get<any>(`${this.apiUrl}/contrat/${id}`);
  }

  create(data: any): Observable<any> {
    return this.http.post<any>(`${this.apiUrl}/contrat`, data);
  }

  update(id: number, data: any): Observable<any> {
    return this.http.put<any>(`${this.apiUrl}/contrat/${id}`, data);
  }

  delete(id: number): Observable<any> {
    return this.http.delete<any>(`${this.apiUrl}/contrat/${id}`);
  }
}
