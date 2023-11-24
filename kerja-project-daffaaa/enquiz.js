const hiraganaList = [
  { hiragana: "あ", romaji: "a" },
  { hiragana: "い", romaji: "i" },
  { hiragana: "う", romaji: "u" },
  { hiragana: "え", romaji: "e" },
  { hiragana: "お", romaji: "o" },
  { hiragana: "か", romaji: "ka" },
  { hiragana: "き", romaji: "ki" },
  { hiragana: "く", romaji: "ku" },
  { hiragana: "け", romaji: "ke" },
  { hiragana: "こ", romaji: "ko" },
  { hiragana: "さ", romaji: "sa" },
  { hiragana: "し", romaji: "shi" },
  { hiragana: "す", romaji: "su" },
  { hiragana: "せ", romaji: "se" },
  { hiragana: "そ", romaji: "so" },
  { hiragana: "た", romaji: "ta" },
  { hiragana: "ち", romaji: "chi" },
  { hiragana: "つ", romaji: "tsu" },
  { hiragana: "て", romaji: "te" },
  { hiragana: "と", romaji: "to" },
  { hiragana: "な", romaji: "na" },
  { hiragana: "に", romaji: "ni" },
  { hiragana: "ぬ", romaji: "nu" },
  { hiragana: "ね", romaji: "ne" },
  { hiragana: "の", romaji: "no" },
  { hiragana: "は", romaji: "ha" },
  { hiragana: "ひ", romaji: "hi" },
  { hiragana: "ふ", romaji: "fu" },
  { hiragana: "へ", romaji: "he" },
  { hiragana: "ほ", romaji: "ho" },
  { hiragana: "ま", romaji: "ma" },
  { hiragana: "み", romaji: "mi" },
  { hiragana: "む", romaji: "mu" },
  { hiragana: "め", romaji: "me" },
  { hiragana: "も", romaji: "mo" },
  { hiragana: "や", romaji: "ya" },
  { hiragana: "ゆ", romaji: "yu" },
  { hiragana: "よ", romaji: "yo" },
  { hiragana: "ら", romaji: "ra" },
  { hiragana: "り", romaji: "ri" },
  { hiragana: "る", romaji: "ru" },
  { hiragana: "れ", romaji: "re" },
  { hiragana: "ろ", romaji: "ro" },
  { hiragana: "わ", romaji: "wa" },
  { hiragana: "を", romaji: "wo" },
  { hiragana: "ん", romaji: "n" },
  { hiragana: "が", romaji: "ga" },
  { hiragana: "ぎ", romaji: "gi" },
  { hiragana: "ぐ", romaji: "gu" },
  { hiragana: "げ", romaji: "ge" },
  { hiragana: "ご", romaji: "go" },
  { hiragana: "ざ", romaji: "za" },
  { hiragana: "じ", romaji: "ji" },
  { hiragana: "ず", romaji: "zu" },
  { hiragana: "ぜ", romaji: "ze" },
  { hiragana: "ぞ", romaji: "zo" },
  { hiragana: "だ", romaji: "da" },
  { hiragana: "ぢ", romaji: "ji" },
  { hiragana: "づ", romaji: "zu" },
  { hiragana: "で", romaji: "de" },
  { hiragana: "ど", romaji: "do" },
  { hiragana: "ば", romaji: "ba" },
  { hiragana: "び", romaji: "bi" },
  { hiragana: "ぶ", romaji: "bu" },
  { hiragana: "べ", romaji: "be" },
  { hiragana: "ぼ", romaji: "bo" },
  { hiragana: "ぱ", romaji: "pa" },
  { hiragana: "ぴ", romaji: "pi" },
  { hiragana: "ぷ", romaji: "pu" },
  { hiragana: "ぺ", romaji: "pe" },
  { hiragana: "ぽ", romaji: "po" }
];

const quizQuestions = []; 

function shuffleArray(array) {
  const shuffledArray = array.slice();
  for (let i = shuffledArray.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [shuffledArray[i], shuffledArray[j]] = [shuffledArray[j], shuffledArray[i]];
  }
  return shuffledArray;
}

function generateQuiz(numQuestions) {
    console.log("generateQuiz function called");
    const quizForm = document.getElementById("quiz-section");
    const questionsContainer = document.getElementById("questions-container");
    const resultsContainer = document.getElementById("results-section");

    const quizTitle = document.getElementById("quiz-title").textContent;

  
    questionsContainer.innerHTML = "";
    resultsContainer.style.display = "none";

    
    const shuffledHiragana = shuffleArray(hiraganaList);

    quizQuestions.length = 0; 
    for (let i = 0; i < numQuestions; i++) {
        const hiragana = shuffledHiragana[i].hiragana;
        const romaji = shuffledHiragana[i].romaji;

        const questionContainer = document.createElement("div");
        questionContainer.classList.add("question-container");

        const questionLabel = document.createElement("label");
        questionLabel.textContent = hiragana;
        questionLabel.setAttribute("for", `question-${i}`);
        questionLabel.classList.add("question-label");

        const questionInput = document.createElement("input");
        questionInput.setAttribute("type", "text");
        questionInput.setAttribute("id", `question-${i}`);
        questionInput.classList.add("question-input");

        questionContainer.appendChild(questionLabel);
        questionContainer.appendChild(questionInput);
        questionsContainer.appendChild(questionContainer);

       
        quizQuestions.push({ hiragana, correctRomaji: romaji });
    }

    quizForm.style.display = "block"; 
    document.getElementById("quiz-title").textContent = quizTitle;

    return quizQuestions; 
}


function validateQuiz(event) {
    event.preventDefault();
    console.log("validateQuiz function called");

    const quizForm = document.getElementById("quiz-section");
    const quizInputs = quizForm.getElementsByTagName("input");

    const resultsContainer = document.getElementById("results-section");
    let resultsTitle = document.getElementById("results-title");

    resultsContainer.innerHTML = "";

    resultsTitle = document.createElement("h2");
    resultsTitle.setAttribute("id", "results-title");
    resultsContainer.appendChild(resultsTitle);


    let correctAnswers = 0;

    const table = document.createElement("table");
    table.classList.add("results-table");

    const tableHeader = document.createElement("tr");
    const hiraganaHeader = document.createElement("th");
    hiraganaHeader.textContent = "Hiragana";
    const romajiHeader = document.createElement("th");
    romajiHeader.textContent = "Your Answer";
    const correctRomajiHeader = document.createElement("th");
    correctRomajiHeader.textContent = "Correct Answer";
    const resultHeader = document.createElement("th");
    resultHeader.textContent = "Result";

    tableHeader.appendChild(hiraganaHeader);
    tableHeader.appendChild(romajiHeader);
    tableHeader.appendChild(correctRomajiHeader);
    tableHeader.appendChild(resultHeader);
    table.appendChild(tableHeader);

    for (let i = 0; i < quizInputs.length; i++) {
        const questionInput = quizInputs[i];
        const questionIndex = parseInt(questionInput.getAttribute("id").split("-")[1]);

       
        if (!questionInput || !quizQuestions[questionIndex]) {
            console.log("Error: Missing question input or quizQuestions entry.");
            continue;
        }

        const romaji = questionInput.value.trim().toLowerCase();
        const correctRomaji = quizQuestions[questionIndex].correctRomaji;
        const hiragana = quizQuestions[questionIndex].hiragana;

        const resultRow = document.createElement("tr");

        const hiraganaCell = document.createElement("td");
        hiraganaCell.textContent = hiragana;

        const userAnswerCell = document.createElement("td");
        userAnswerCell.textContent = romaji;

        const correctAnswerCell = document.createElement("td");
        correctAnswerCell.textContent = correctRomaji;

        const resultCell = document.createElement("td");
        if (romaji === correctRomaji.toLowerCase()) {
            correctAnswers++;
            resultCell.textContent = "Correct";
            resultCell.classList.add("correct-answer");
        } else {
            resultCell.textContent = "Incorrect";
            resultCell.classList.add("incorrect-answer");
        }

        resultRow.appendChild(hiraganaCell);
        resultRow.appendChild(userAnswerCell);
        resultRow.appendChild(correctAnswerCell);
        resultRow.appendChild(resultCell);
        table.appendChild(resultRow);
    }

    resultsContainer.appendChild(table);

    const totalQuestions = quizInputs.length;
    const resultsTitleText = `Results: ${correctAnswers}/${totalQuestions} Correct`;
    resultsTitle.textContent = resultsTitleText;

    quizForm.style.display = "none";
    resultsContainer.style.display = "block";
}


document.addEventListener("DOMContentLoaded", function () {

    document.getElementById("generate-button").addEventListener("click", function (event) {
        event.preventDefault();
        const numQuestions = parseInt(document.getElementById("num-questions").value);
        generateQuiz(numQuestions); // Store the quizQuestions array
    });

    document.getElementById("submit-button").addEventListener("click", function (event) {
        event.preventDefault(); 
        validateQuiz(event);
    });
});