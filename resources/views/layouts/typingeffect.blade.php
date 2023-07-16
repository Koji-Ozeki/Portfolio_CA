<div id="typingEffect"></div>
  <script>
      const textLines = [
          "Potrfolio",
          "Koji Ozeki"
      ];

      const typingSpeed = 100; // タイピング速度（ミリ秒）

      function typeText(targetElement, text, index, callback) {
          if (index < text.length) {
              targetElement.innerHTML += text.charAt(index);
              setTimeout(() => {
                  typeText(targetElement, text, index + 1, callback);
              }, typingSpeed);
          } else {
              callback();
          }
      }

      function clearText(targetElement, callback) {
          setTimeout(() => {
              targetElement.innerHTML = "";
              callback();
          }, 1000);
      }

      function startTyping() {
          const typingElement = document.getElementById("typingEffect");

          let lineIndex = 0;
          function typeNextLine() {
              if (lineIndex < textLines.length) {
                  typeText(typingElement, textLines[lineIndex], 0, () => {
                      clearText(typingElement, () => {
                          lineIndex++;
                          typeNextLine();
                      });
                  });
              }
          }

          typeNextLine();
      }

      // ページが読み込まれたらタイピングを開始
      window.onload = startTyping;
  </script>