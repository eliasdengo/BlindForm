import Echo from "laravel-echo";
import "./bootstrap";


const user = document.getElementById("user").innerHTML;
// const otmess = document.getElementById("otPrivateMessage");
const topic = topicf.id;

const form = document
    .getElementById("my_Form")

    .addEventListener("submit", (e) => {
        e.preventDefault();
        var laravelToken = document
            .querySelector('meta[name="csrf-token"]')
            .getAttribute("content");
        const messa = document.getElementById("message").value;

        const newElement = document.createElement("div");
        newElement.classList.add("myMessage");
        const priv = document.createElement("div");
        priv.classList.add("mySingleMessage");
        priv.appendChild(newElement);
        newElement.textContent = messa;
        document.getElementById("messageContainer").appendChild(priv);

        const option = {
            method: "post",
            url: "/sendMessage",
            data: {
                message: messa,
                user: user,
                topic: topic
                
            },
        };
        axios(option)
            .then(function (response) {
                //handle success
               // console.log(response);
            })
            .catch(function (response) {
                //handle error
               // console.log(response);
            });;
    });
