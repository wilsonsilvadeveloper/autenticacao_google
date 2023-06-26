function getCookieData(cookieName) {
    const cookies = document.cookie.split(";");
  
    for (let i = 0; i < cookies.length; i++) {
      const cookie = cookies[i].trim();
      if (cookie.startsWith(cookieName + "=")) {
        const cookieValue = cookie.substring(cookieName.length + 1);
        return JSON.parse(decodeURIComponent(cookieValue));
      }
    }
  
    return null;
  }
  
  // Exemplo de uso
  const userData = getCookieData("usuario");
  
  if (userData) {
    // Os dados do usuário foram encontrados no cookie
    console.log(userData.nome);
    console.log(userData.email);
    console.log(userData.token);
  } else {
    // Os dados do usuário não foram encontrados no cookie
    console.log("Dados do usuário não encontrados no cookie");
  }
  