const copyFunction = () => {
    navigator.clipboard.writeText(window.location.href);

    document.getElementById("message").innerHTML = "Link copied to clipboard!";

    setTimeout(() => {
        document.getElementById("message").innerHTML = "";
    }, 2000);
}