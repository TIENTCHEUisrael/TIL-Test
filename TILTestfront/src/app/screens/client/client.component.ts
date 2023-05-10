import { Component } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { Client } from '../../models/client';
import { ClientService } from '../../services/client.service';
@Component({
  selector: 'app-client',
  templateUrl: './client.component.html',
  styleUrls: ['./client.component.scss']
})
export class ClientComponent {
  success: string;
  public formClient: FormGroup;
  public erreur!: string;
  Clients: Client[] = [];
  client: Client;

  constructor(
    public fb: FormBuilder,
    private ClientService: ClientService,
    private router: Router
  ) {}

  ngOnInit(): void {
    this.formClient = this.fb.group({
      nom: ['', Validators.required],
      ville: ['', Validators.required],
      telephone: ['', Validators.required],
      numero: ['', Validators.required],
      createdAt: ['', Validators.required],
    });
    this.getClients();
  }
  deleteClient(id: number) {
    this.ClientService.delete(id).subscribe(
      (data) => {
        console.log(data);
        // Supprimer la région de la liste
        this.Clients = this.Clients.filter((r) => +r.id !== id);
      },
      (error) => {
        console.log(error);
        this.erreur = 'Erreur lors de la suppression de la région.';
      }
    );
  }
  updateClient(): void {
    this.ClientService.update(+this.client.id, this.client).subscribe(
      (response) => {
        console.log(response);
        this.success = 'Client mise a jour';
      },
      (error) => {
        console.log(error);
      }
    );
  }
  getClients(){
    this.ClientService.getAll().subscribe(
      (data: Client[]) => {
        this.Clients = data;
      },
      (error) => {
        console.log(error);
      }
    );
  }
  createClient() {
    const r = new Client();
    r.nom = this.formClient.value.nom;
    r.ville = this.formClient.value.ville;
    r.telephone = this.formClient.value.telephone;
    r.numero = this.formClient.value.numero;
    r.createdAt = this.formClient.value.createdAt;
    this.ClientService.create(r).subscribe(
      (data) => {
        console.log(data);
        this.formClient.reset();
      },
      (error) => {
        console.log(error);
        this.erreur = "Erreur lors de l'insertion de la région.";
      }
    );
  }
}
