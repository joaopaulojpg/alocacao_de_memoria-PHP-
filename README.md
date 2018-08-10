# Melhorias ao codificar

# Utilize HTML quando for exibir algo
O html se destaca por ser interpretado mais rápido que as linguagens web, evite usar linguagens webs quando o conteúdo for estático.
# Use alocação em cache
Isso irá reduzir as requisições sobre o servidor. Se não, toda vida iria ter que fazer uma requisição ao entrar na página.
# Evite fazer consultas dentro de loop
Nunca faça consultas dentro de um loop. Além de ser desnecessário em muitos casos, fazer uma requisição a dentro de uma requisição pode aumentar a requisição e acabar causando lentidão em todo o sistema ou até mesmo derruba-lo. Melhore suas consultas, tente usar relacionamento de tabelas.

Em teste-memoria.php você poderá verificar na prática como é possível manipular a memória, e a solução para o *PHP*
