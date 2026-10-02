export function initQuestions() {
  const questions = document.querySelectorAll("[data-question-active]");

  console.log(questions);

  questions.forEach((q) => {
    
    q.addEventListener("click", () => {
      var active = JSON.parse(q.dataset.questionActive);
      q.dataset.questionActive = !active;
    })
  })
}