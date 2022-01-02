document.onreadystatechange = function () {
    if (document.readyState !== "complete") {
        document.querySelector(".loading").classList.add("show");
    } else {
        document.querySelector(".loading").classList.remove("show");
    }
};
