import { Injectable } from '@angular/core';

import { SessionStorageService } from '@service/storage/session-storage.service';


@Injectable({
  providedIn: 'root'
})
export class DataDefinitionStorageService {

  constructor(protected stg: SessionStorageService){ }

  storage(entityName: string, row: { [index: string]: any }): void {
    switch(entityName) {
      case "entity": this.storageEntity(row); break;
    }
  }

  storageEntity(row: { [index: string]: any }): void{
    if(!row) return;
    var rowCloned = JSON.parse(JSON.stringify(row))
    /**
     * se realiza un 'deep clone' del objeto para poder eliminar atributos a medida que se procesa y no alterar la referencia original
     */
    this.stg.setItem("entity" + rowCloned.id, rowCloned);
  }
}
