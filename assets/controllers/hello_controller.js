import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    greet() {
        console.log("Stimulus says Hello!");
        alert("👋 Hello from Stimulus!");
    }
}
