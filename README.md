# 🚀 Hub de Conceitos Fundamentais em PHP

Este repositório serve como um **catálogo focado** de implementações em PHP, projetadas para demonstrar a aplicação sólida e eficaz de estruturas de controle de fluxo, manipulação de dados e features modernas da linguagem.

Ele reflete a proficiência em sintaxe e a capacidade de escrever código limpo e idiomático, abordando desde a lógica condicional básica até o uso de recursos como a expressão `match` (PHP 8.0+).

---

## 🎯 Projetos e Demonstrações de Proficiência

Cada script é uma prova de conceito focada em um conjunto específico de funcionalidades.

### 1. Sistema Modular de Classificação de Conteúdo (Screen Match)

**Descrição:** Implementação de um subsistema de gerenciamento de metadados e avaliação de filmes, com lógica de negócios integrada para classificação de lançamento e elegibilidade de plano.

| Conceitos Chave | Detalhes da Implementação |
| :--- | :--- |
| **Manipulação de Argumentos CLI** | Leitura robusta de notas via `$argv`, garantindo flexibilidade na execução. |
| **Tipagem e Conversão de Dados** | Uso explícito de `(float)` para garantir precisão nos cálculos de média. |
| **Estruturas Condicionais Avançadas** | Uso de `if/elseif/else` para hierarquizar lançamentos e a expressão `match` (PHP 8.0+) para mapeamento eficiente de gêneros. |
| **Lógica Booleana Complexa** | Aplicação do operador lógico `OR` (`||`) para determinar inclusão no plano com base em múltiplas regras (`$planoPrime || $anoLancamento < 2020`). |

### 2. Rotina de Saudação Sensível ao Tempo

**Descrição:** Um script de controle de fluxo que valida um horário e retorna uma saudação contextualizada, demonstrando precisão no uso de operadores relacionais.

| Conceitos Chave | Detalhes da Implementação |
| :--- | :--- |
| **Controle de Fluxo Preciso** | Definição clara dos limites de cada faixa de horário (`> 6 && < 12`, `> 12 && < 18`) para evitar ambiguidade. |
| **Estrutura `if/elseif/else`** | Implementação concisa e fácil de manter para a lógica de classificação de tempo. |

### 3. Calculadora de Desempenho Escolar Interativa

**Descrição:** Um programa que interage com o usuário para coletar dados, processar um cálculo de média e fornecer feedback imediato baseado em critérios de aprovação.

| Conceitos Chave | Detalhes da Implementação |
| :--- | :--- |
| **Input/Output (I/O) em CLI** | Utilização eficaz de `readline()` para obter dados do usuário, simulando uma aplicação interativa. |
| **Coerção de Tipo** | Conversão explícita de `string` (retorno do `readline`) para `float`, essencial para garantir cálculos matemáticos corretos. |
| **Feedback Condicional** | Estrutura `if/else` simples e direta para comunicar o resultado da avaliação (aprovado/reprovado). |

---

## ⚙️ Setup e Execução

Para explorar e executar os exemplos, é necessário ter o **PHP 8.0+** (para suporte à expressão `match`) instalado.

1.  **Clonar o Repositório:**
    ```bash
    git clone [LINK_DO_SEU_REPOSITORIO]
    cd [NOME_DO_REPOSITORIO]
    ```

2.  **Execução de Exemplos:**

    * **Scripts com Interatividade (`calculo_media.php`, `saudacao.php`):**
      ```bash
      php nome_do_arquivo.php
      # O script solicitará a entrada do usuário.
      ```

    * **Scripts com Argumentos de Linha de Comando (`avaliacao_filmes.php`):**
      ```bash
      # Exemplo: passando 4 notas de avaliação
      php avaliacao_filmes.php 9.5 8.0 10.0 9.2
      ```
---
