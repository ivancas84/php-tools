import { Component, OnInit, OnChanges, SimpleChanges, Input } from '@angular/core';
import { AuthService } from '@service/auth/auth.service';

@Component({
  selector: 'app-menu',
  templateUrl: './menu.component.html',
})
export class MenuComponent implements OnChanges { 

  @Input() authenticated = false;
  view = [];

  constructor(
    protected auth: AuthService, 
  ) { }

  /*ngOnInit(): void {
    Si se necesitan valores especiales en los parametros definirlos en el ngOnInit
  }*/

  ngOnChanges(changes: SimpleChanges): void {
    if(changes.authenticated.currentValue != changes.authenticated.previousValue){
      if(this.authenticated){
        var token = this.auth.getToken();
        this.view = (token && token.hasOwnProperty("view")) ? token["view"] : [];
      } else {
        this.view = [];
      }
    }
  }

}
