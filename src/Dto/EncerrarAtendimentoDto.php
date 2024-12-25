<?php

declare(strict_types=1);

/*
 * This file is part of the Novo SGA project.
 *
 * (c) Rogerio Lino <rogeriolino@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Novosga\AttendanceBundle\Dto;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * EncerrarAtendimentoDto
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
final readonly class EncerrarAtendimentoDto
{
    /** @param int[] $servicos */
    public function __construct(
        #[Assert\Count(min: 1)]
        public array $servicos,
        public ?string $resolucao = null,
        public ?string $observacao = null,
        public ?bool $redirecionar = false,
        public ?int $novoServico = null,
        public ?int $novoUsuario = null,
    ) {
    }
}
