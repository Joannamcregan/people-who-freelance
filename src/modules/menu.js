import $ from 'jquery';
class Menu {
    constructor(){
        this.menuLink = $('#menu-link');
        this.menu = $('#menu-container');
        this.menuWrapper = $('#menu-container-wrapper');
        this.closeMenu = $('#close-menu');
        this.events();
    }
    events(){
        this.menuLink.on('click', ()=>{
            this.menuLink.addClass('hidden');
            this.menuWrapper.removeClass('hidden');
            this.menuWrapper.addClass('fadeIn');
            setTimeout(()=>{
                this.menuWrapper.removeClass('fadeIn')
            }, 700);
            setTimeout(()=>{
                this.closeMenu.removeClass('invisible');
            }, 750);
        })
        this.closeMenu.on('click', ()=>{
            this.menuWrapper.addClass('fadeOut');
            setTimeout(()=>{
                this.menuWrapper.addClass('hidden');
                this.menuWrapper.removeClass('fadeOut');
                this.menuLink.removeClass('hidden');
            }, 750);
        })
    }
}

export default Menu;