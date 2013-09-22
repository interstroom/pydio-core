<?php
/*
 * Copyright 2007-2013 Charles du Jeu - Abstrium SAS <team (at) pyd.io>
 * This file is part of Pydio.
 *
 * Pydio is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Pydio is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with Pydio.  If not, see <http://www.gnu.org/licenses/>.
 *
 * The latest code can be found at <http://pyd.io/>.
*/
$mess=array(
"Main"      => "Opções Principais",
"App Title" => "Título da Aplicação",
"Your application title" => "Este título irá aparecer como título da janela, e no logo de inicio.",
"Main container for core AjaXplorer settings (application title, sharing, webdav server config, etc...)" => "Contentor principal das definições do Core do AjaxPlorerMain (Título de Aplicação, partilhas, configurações webdav, etc...)",
"Default Language" => "Língua Pré-Definida",
"Default language when a user does not have set his/her own." => "Língua a ser utilizada por pré-Definição quando um utilizador ainda não tenha escolhido uma a seu gosto.",
"Sharing" => "Partilhas",
"Download Folder" => "Pasta de Transferências",
"Absolute path to the public folder where temporary download URLs will be created. Setting this empty will disable the sharing feature." => "Caminho completo para a pasta pública de transferências, onde todos os URLs serão gerados. Deixar este campo vazio irá desactivar as funções de partilha.",
"Download URL" => "URL de Transferência",
"If not inferred directly from the current ajaxplorer URI plus the public download folder name, replace the public access URL here." => "Caso não seja especificado neste campo, o URL de transferência a ser utilizado será o endereço pelo qual o AjaXplorer se encontra a ser acedido de momento mais o caminho interno de transferência do AjaXplorer.",
"Existing users" => "Utilizadores Existentes",
"Allow the users to pick an existing user when sharing a folder" => "Permite aos utilizadores escolherem um outro utilizador ao partilhar uma pasta",
"Compression Features" => "Opções de Compressão",
"Gzip Download" => "Compressão com Gzip",
"Gzip files on-the-fly before downloading. Disabled by default, as it's generally useful only on small files, and decreases performances on big files. This has nothing to see with the Zip Creation feature, it's just a on-the-fly compression applied on a unique file at download." => "Comprime todos os ficheiros com Gzip antes de os enviar para o cliente. Desactivado por pré-definição, esta função é maioritariamente útil em ficheiros de pequenas dimensões, e irá causar degradação do desempenho com ficheiros grandes. Esta função não tem nada a ver com a função de criação de ficheiros ZIP, é apenas um método de compressão de ficheiros do servidor em si que é aplicado antes de se iniciar a transferência para o cliente final.",
"Gzip Limit" => "Limite Gzip",
"If activated, a default limit should be set above when files are no more compressed." => "Se activado, o limite pré-definido deve ser definido com um valor superior quando os ficheiros não são mais comprimidos.",
"Zip Creation" => "Criação de ZIPs",
"If you encounter problems with online zip creation or multiple files downloading, you can disable the feature." => "Caso encontre problemas a criar ficheiros ZIP online, ou na criação de múltiplos ficheiros para transferência, pode desactivar esta função.",
"WebDAV Server" => "Servidor WebDAV",
"Enable WebDAV" => "Activar WebDAV",
"Enable the webDAV support. Please READ THE DOC to safely use this feature." => "Activa o suporte para webDAV. Por favor LEIA A DOCUMENTAÇÃO para utilizar esta função com segurança.",
"Shares URI" => "URI de Partilha",
"Common URI to access the shares. Please READ THE DOC to safely use this feature." => "URI Comum para aceder às partilhas. Por favor LEIA A DOCUMENTAÇÃO para utilizar esta função com segurança.",
"Shares Host" => "Anfitrião de Partilhas",
"Host used in webDAV protocol. Should be detected by default. Please READ THE DOC to safely use this feature." => "Anfitrião a ser usado no protocolo webDAV. Em principio é detectado automaticamente por pré-definição. Por favor LEIA A DOCUMENTAÇÃO para utilizar esta função com segurança.",
"Digest Realm" => "Domínio Digest",
"Default realm for authentication. Please READ THE DOC to safely use this feature." => "Autenticação pré-definida do Domínio Digest. Por favor LEIA A DOCUMENTAÇÃO para utilizar esta função com segurança.",
"Miscalleneous" => "Outros",
"Command-line Active" => "Activar a Linha de Comandos",
"Use AjaXplorer framework via the command line, allowing CRONTAB jobs or background actions." => "Utilizar a Framework do AjaXplorer a partir da Linha de Comandos, permitindo correr Tarefas Cronológicas ou acções em segundo plano (CRONTAB).",
"Command-line PHP" => "Linha de Comandos PHP",
"On specific hosts, you may have to use a specific path to access the php command line" => "Em alguns Anfitriões, terá de especificar o caminho interno completo para aceder à linha de comandos PHP",
"Filename length" => "Tamanho do Nome de Ficheiro",
"Maximum characters length of new files or folders" => "Tamanho máximo em caracteres de ficheiros e pastas novas",
"Temporary Folder" => "Pasta Temporária",
"This is necessary only if you have errors concerning the tmp dir access or writeability : most probably, they are due to PHP SAFE MODE (should disappear in php6) or various OPEN_BASEDIR restrictions. In that case, create and set writeable a tmp folder somewhere at the root of your hosting (but above the web/ or www/ or http/ if possible!!) and enter here the full path to this folder" => "É apenas necessário se existirem erros relacionados com permissões nas directorias temporárias : provavelmente estão relacionados com o modo PHP SAFE MODE (deverá deixar de existir na versão 6 do PHP) ou restrições relacionadas com OPEN_BASEDIR. Se for este o caso, pode criar e marcar com permissões de escrita uma pasta temporária na raíz do seu anfitrião (mas que esteja localizada acima da pasta web/ ou www/ ou http/ caso possível!!!) e por fim introduzir aqui o caminho completo para essa pasta",
"Admin E-Mail" => "E-Mail de Administrador",
"Administrator E-Mail, not used for the moment" => "E-Mail de Administrador, não usado de momento",
"User Credentials" => "Dados de Utilizador",
"User" => "Utilizador",
"User name - Can be overriden on a per-user basis (see users 'Personal Data' tab)" => "Nome de Utilizador - Pode ser substituído por utilizador (veja o separador 'Dados Pessoais' na parte dos utilizadores)",
"Password" => "Palavra-Chave",
"User password - Can be overriden on a per-user basis." => "Palavra-Chave de Utilizador - Pode ser substituída por utilizador.",
"Session credentials" => "Dados de Sessão",
"Try to use the current AjaXplorer user credentials for connecting. Warning, the AJXP_SESSION_SET_CREDENTIALS config must be set to true!" => "Tente usar os dados actuais de utilizador do AjaXplorer para se ligar. ATENÇÃO: O ficheiro de configuração 'AJXP_SESSION_SET_CREDENTIALS' deverá estar marcado como Verdadeiro(True)!",
"User name" => "Nome de Utilizador",
"User password" => "Palavra-Chave de Utilizador",
"Repository Slug" => "Repositório SLUG",
"Alias" => "Pseudónimo",
"Alias for replacing the generated unique id of the workspace" => "Pseudónimo utilizado para substituir um ID único gerado para um repositório",
"Template Options" => "Opções de Modelo",
"Allow to user" => "Permitir ao utilizador",
"Allow non-admin users to create a repository from this template." => "Permitir a utilizadores sem permissão de administrador criar uma Área de Trabalho baseada neste Modelo.",
"Default Label" => "Etiqueta Pré-Definida",
"Prefilled label for the new repository, you can use the AJXP_USER keyworkd in it." => "Etiqueta Pré-Definida para uma nova Área de Trabalho, pode utilizar a palavra 'AJXP_USER' neste campo.",
"Small Icon" => "Icon Pequeno",
"16X16 Icon for representing the template" => "Icon com a dimensão de 16X16 que irá representar o modelo",
"Big Icon" => "Icon Grande",
"Big Icon for representing the template" => "Icon de Grande dimensão que irá representar o Modelo",
"Filesystem Commons" => "Opções do Sistema de Ficheiros",
"Recycle Bin Folder" => "Pasta Reciclagem",
"Leave empty if you do not want to use a recycle bin." => "Deixe em branco caso não queira utilizar a Reciclagem no seu servidor.",
"Default Rights" => "Permissões Pré-Definidas",
"This right pattern (empty, r, or rw) will be applied at user creation for this repository." => "O padrão (empty, r, ou rw) serão aplicados durante a criação de novos utilizadores nesta Área de Trabalho.",
"Character Encoding" => "Codificação de Caracteres",
"If your server does not set correctly its charset, it can be good to specify it here manually." => "Se o seu servidor não possuir a codificação de caracteres correctamente configurada, pode ser útil especificar a mesma aqui manualmente.",
"Pagination Threshold" => "Threshold de Paginação",
"When a folder will contain more items than this number, display will switch to pagination mode, for better performances." => "Quando uma página possuir mais itens que o número especificado aqui, o modo de visualização será mudado automaticamente para 'Modo de Paginação' para se obter melhor desempenho.",
"#Items per page" => "#Itens por página",
"Once in pagination mode, number of items to display per page." => "Uma vez em modo de paginação, o número de itens que deverão ser mostrados por página.",
"Default Metasources" => "Fontes Meta Pré-Definidas",
"Comma separated list of metastore and meta plugins, that will be automatically applied to all repositories created with this driver" => "Lista de Fontes Meta e de Plugins Meta, separada por virgulas, que será aplicada automaticamente a todas as Áreas de Trabalho criadas com este controlador",
"Auth Driver Commons" => "Opções do Controlador Auth",
"Transmit Clear Pass" => "Transmitir Palavra-Chave Livre",
"Whether the password will be transmitted clear or encoded between the client and the server" => "Se a password será ou não encriptada durante a transmissão da mesma do cliente para o servidor",
"Auto Create User" => "Criar Utilizador Automaticamente",
"When set to true, the user object is created automatically if the authentication succeed. Used by remote authentication systems." => "Quando definido como 'verdadeiro(true)' o utilizador-objecto será criado automaticamente se a autenticação for feita com sucesso. Usado para autenticar sistemas remotos.",
"Login Redirect" => "Redirecionamento de Login",
"If set to a given URL, the login action will not trigger the display of login screen but redirect to this URL." => "Se colocado um determinado URL, a acção de login não irá activar o ecrã de login mas sim redireccionar automaticamente para o URL especificado.",
"Admin Login" => "Login de Administrador",
"For exotic auth drivers, an user ID that must be considered as admin by default." => "Para Controladores Exotic Auth, um ID de Utilizador que tem que ser considerado como Administrador por pré-definição.",
"Show hidden files" => "Mostrar Ficheiros Ocultos",
"Show files beginning with a ." => "Mostrar ficheiros começados por '.'",
"Hide recycle bin" => "Esconder a Reciclagem",
"Whether to show the recycle bin folder. Unlike in the following options, the folder will be hidden but still writeable." => "Mostrar ou não a pasta Reciclagem. Ao contrário das seguintes opções, a pasta continua a ter permissões de escrita, mas estará oculta.",
"Hide extensions" => "Ocultar Extenções",
"Comma-separated list of extensions to hide. Extensions, files and folders that are hidden are also access forbidden." => "Lista de extensões a ocultar, separada por virgulas. Extensões, ficheiros e pastas que forem ocultados, também não terão permissões de acesso aos mesmos.",
"Hide folders" => "Ocultar Pastas",
"Comma-separated list of specific folders to hide" => "Lista de pastas a esconder, separada por virgulas",
"Hide files" => "Ocultar Ficheiros",
"Comma-separated list of specific files to hide" => "Lista de ficheiros a esconder, separada por virgulas",
"Metadata and indexation" => "Indexação e Metadata",
"Default Metasources" => "Fontes Meta pré-Definidas",
"Comma-separated list of metastore and meta plugins, that will be automatically applied to all repositories created with this driver" => "Lista de Fontes Meta e de Meta Plugins, separada por virgulas, que irá ser aplicada automaticamente a todas as Áreas de Trabalho criadas por este controlador",
);
?>