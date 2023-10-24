Email.send({
    SecureToken: "29b704a4-c750-4c93-8555-869a7fdf7321",
    To: 'jadbenlatreche@gmail.com',
    From: "sitebdeg4lyon",
    Subject: "This is the subject",
    Body: "And this is the body"
})
    .then(
        message => {
            console.log(message);
        }
    ).catch(err => {
        console.log(err);
    });