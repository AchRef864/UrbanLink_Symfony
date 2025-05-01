import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
  static values = {
    listUrl: String,
    newUrl: String
  }

  connect() {
    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

    if (!SpeechRecognition) {
      this.speak("La reconnaissance vocale n'est pas supportée sur ce navigateur.");
      return;
    }

    this.recognition = new SpeechRecognition();
    this.recognition.lang = 'fr-FR';
    this.recognition.interimResults = false;
    this.recognition.maxAlternatives = 1;

    this.recognition.onresult = this.onResult.bind(this);
    this.recognition.onerror = this.onError.bind(this);
  }

  start() {
    this.speak("J'écoute...");
    this.recognition.start();
  }

  onResult(event) {
    const text = event.results[0][0].transcript.trim().toLowerCase();
    console.log('Texte reconnu :', text);

    if ((text.includes('montre') || text.includes('liste')) && text.includes('course')) {
      this.speak("Voici la liste de vos courses.");
      window.location.href = this.listUrlValue;
    } else if (text.includes('ajout') && text.includes('course')) {
      this.speak("Je vous redirige vers l'ajout d'une course.");
      window.location.href = this.newUrlValue;
    } else {
      this.speak("Commande non reconnue. Veuillez réessayer.");
    }
  }

  onError(event) {
    console.error('Erreur de reconnaissance :', event.error);
    this.speak("Je n'ai pas compris. Veuillez réessayer.");
  }

  speak(message) {
    if (!window.speechSynthesis) {
      console.warn("Speech synthesis non supportée");
      return;
    }

    const utterance = new SpeechSynthesisUtterance(message);
    utterance.lang = 'fr-FR';
    window.speechSynthesis.speak(utterance);
  }
}
