import { Injectable } from '@angular/core';

import { DataDefinitionService } from '@service/data-definition/data-definition.service';
import { Parser } from '@class/parser';
import { combineLatest, Observable, of } from 'rxjs';
import { map, switchMap } from 'rxjs/operators';

@Injectable({
  providedIn: 'root'
})
export class _DataDefinitionLabelService {

  constructor(protected dd: DataDefinitionService){ }

  label(entityName: string, id: string): Observable<string> {
    switch(entityName) {
      case "entity": { return this.labelEntity(id); }
    }
  }

  labelEntityRow (row: any): string {
    if(!row) return null;

    let ret = "";
    if (row["id"]) ret = ret.trim() + " " + row["id"];

    return ret.trim();
  }

  labelEntity(id: string): Observable<any> {
    return this.dd.get("entity", id).pipe(
      switchMap(
        row => {
          if(!row) return of(null);
          return combineLatest([
            of(this.labelEntityRow(row)),
          ])
        }
      ),
      map(
        response => { return (!response)? null : response.join(" "); }
      )
    );
  }
}
