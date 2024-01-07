const darkModeToggle = document.querySelector("dark-mode-toggle");

// Set the mode to light
darkModeToggle.mode = "light";

// Set the appearance to resemble a switch (theme: light/dark)
darkModeToggle.appearance = "switch";
// Set the appearance to resemble a toggle (dark mode: on/off)
darkModeToggle.appearance = "toggle";

document.addEventListener("colorschemechange", (e) => {
  //   console.log(`Color scheme changed to ${e.detail.colorScheme}.`);

  if (e.detail.colorScheme === "dark") {
    document.body.classList.add("dark-mode");
    document.body.classList.remove("light-mode");
  } else if (e.detail.colorScheme === "light") {
    document.body.classList.add("light-mode");
    document.body.classList.remove("dark-mode");
  }

  // Remember the user's last color scheme choice
  darkModeToggle.setAttribute("permanent", e.detail.colorScheme);
});

document.addEventListener("load", (e) => {
  if (darkModeToggle.getAttribute("permanent") === "dark") {
    document.body.classList.add("dark-mode");
    document.body.classList.remove("light-mode");
    darkModeToggle.mode = "dark";
  } else if (darkModeToggle.getAttribute("permanent") === "light") {
    document.body.classList.add("light-mode");
    document.body.classList.remove("dark-mode");
    darkModeToggle.mode = "light";
  }
});

let isDarkMode = false;
function toggleTheme() {
  let theme = document.querySelector(".theme-switch");
  isDarkMode = theme.classList.toggle("active").valueOf();

  console.log("isDarkMode: " + isDarkMode);

  let root = document.querySelector(":root");
  if (isDarkMode) {
    root.style.setProperty("--body-background", "#1e1e1e");
  } else {
    root.style.setProperty("--body-background", "#f5f5f5");
  }
}

function changeLanguage(wishLang, targetFile) {
    switch (wishLang) {
        case "nl":
            window.location.href = "../nl/" + targetFile;
            return;
        case "en":
            window.location.href = "../en/" + targetFile;
            return;
        case "fr":
            window.location.href = "../fr/" + targetFile;
            return;
        default:
            console.log("Unknown language: " + wishLang);
            break;
    }
}