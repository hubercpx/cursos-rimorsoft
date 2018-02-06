import { Component } from '@angular/core'

@Component({
    selector: 'videojuegos',
    templateUrl: './videojuegos.component.html'
})
export class VideojuegosComponent{
    public nombre:string;
    public mejor_juego:string;
    public mejor_juego_retro:string;
    public mostrar_retro:boolean;
    public color:string;
    public year:number;

    public videojuegos:Array<any>;

    constructor(){
        this.nombre = 'Videojuegos 2018';
        this.mejor_juego = 'GTA 5';
        this.mejor_juego_retro = 'Super Mario 64';
        this.color = "yellow";
        this.mostrar_retro = true;
        this.year = 2018;
        this.videojuegos = [
            'Los simpson hit and run',
            'assasins creed',
            'GTA 5',
            'Call of Duty',
            'takken',
            911
        ];
    }
}
