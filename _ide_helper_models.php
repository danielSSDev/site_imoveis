<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Cidade
 *
 * @property int $id
 * @property string $nome
 * @property string $estado
 * @property string $sigla_estado
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Imovel[] $imoveis
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cidade newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cidade newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cidade query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cidade whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cidade whereEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cidade whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cidade whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cidade whereSiglaEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cidade whereUpdatedAt($value)
 */
	class Cidade extends \Eloquent {}
}

namespace App{
/**
 * App\Galeria
 *
 * @property int $id
 * @property int $imovel_id
 * @property string|null $titulo
 * @property string|null $descricao
 * @property string $imagem
 * @property string|null $ordem
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Imovel $imovel
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Galeria newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Galeria newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Galeria query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Galeria whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Galeria whereDescricao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Galeria whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Galeria whereImagem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Galeria whereImovelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Galeria whereOrdem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Galeria whereTitulo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Galeria whereUpdatedAt($value)
 */
	class Galeria extends \Eloquent {}
}

namespace App{
/**
 * App\Imovel
 *
 * @property int $id
 * @property int $tipo_id
 * @property int $cidade_id
 * @property string $titulo
 * @property string $descricao
 * @property string $imagem
 * @property string $status
 * @property string $endereco
 * @property string $cep
 * @property float $valor
 * @property int $dormitorios
 * @property string $detalhes
 * @property string|null $mapa
 * @property int $visualizacoes
 * @property string $publicar
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Cidade $cidade
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Galeria[] $galeria
 * @property-read \App\Tipo $tipo
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel whereCep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel whereCidadeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel whereDescricao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel whereDetalhes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel whereDormitorios($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel whereEndereco($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel whereImagem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel whereMapa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel wherePublicar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel whereTipoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel whereTitulo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel whereValor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Imovel whereVisualizacoes($value)
 */
	class Imovel extends \Eloquent {}
}

namespace App{
/**
 * App\Pagina
 *
 * @property int $id
 * @property string $titulo
 * @property string $descricao
 * @property string $texto
 * @property string|null $imagem
 * @property string|null $mapa
 * @property string|null $email
 * @property string $tipo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pagina newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pagina newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pagina query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pagina whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pagina whereDescricao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pagina whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pagina whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pagina whereImagem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pagina whereMapa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pagina whereTexto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pagina whereTipo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pagina whereTitulo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pagina whereUpdatedAt($value)
 */
	class Pagina extends \Eloquent {}
}

namespace App{
/**
 * App\Papel
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Permissao[] $permissoes
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Papel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Papel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Papel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Papel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Papel whereDescricao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Papel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Papel whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Papel whereUpdatedAt($value)
 */
	class Papel extends \Eloquent {}
}

namespace App{
/**
 * App\Permissao
 *
 * @property int $id
 * @property string $nome
 * @property string|null $descricao
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Papel[] $papeis
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permissao newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permissao newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permissao query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permissao whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permissao whereDescricao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permissao whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permissao whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permissao whereUpdatedAt($value)
 */
	class Permissao extends \Eloquent {}
}

namespace App{
/**
 * App\Slide
 *
 * @property int $id
 * @property string|null $titulo
 * @property string|null $descricao
 * @property string $imagem
 * @property string|null $link
 * @property int|null $ordem
 * @property string $publicado
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide whereDescricao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide whereImagem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide whereOrdem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide wherePublicado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide whereTitulo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Slide whereUpdatedAt($value)
 */
	class Slide extends \Eloquent {}
}

namespace App{
/**
 * App\Tipo
 *
 * @property int $id
 * @property string $titulo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Imovel[] $imoveis
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tipo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tipo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tipo query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tipo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tipo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tipo whereTitulo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tipo whereUpdatedAt($value)
 */
	class Tipo extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Papel[] $papeis
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

