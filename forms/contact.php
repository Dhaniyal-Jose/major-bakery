<script>
document.getElementById('sendToWhatsapp').addEventListener('click', function () {
  // Get form values
  const name = document.querySelector('input[name="name"]').value;
  const email = document.querySelector('input[name="email"]').value;
  const subject = document.querySelector('input[name="subject"]').value;
  const message = document.querySelector('textarea[name="message"]').value;

  // Format the message
  const whatsappMessage = `Hello,%0A
Name: ${name}%0A
Email: ${email}%0A
Subject: ${subject}%0A
Message: ${message}`;

  // WhatsApp number (in international format)
  const phoneNumber = "919567674668";

  // Open WhatsApp chat
  const whatsappURL = `https://wa.me/${phoneNumber}?text=${whatsappMessage}`;
  window.open(whatsappURL, '_blank');
});
</script>
