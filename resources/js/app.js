import './bootstrap';
import '@hotwired/turbo'
import 'bootstrap-datepicker'
import Toast from "./elements/toast";

customElements.define('app-toast', Toast)

document.addEventListener("turbo:load", function () {
    $('.select2-input').select2();
});
