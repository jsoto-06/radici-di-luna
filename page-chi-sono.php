<?php
/**
 * Template Name: Chi Sono (Elena)
 * Radici di Luna - Elena Biography & Manifesto Template
 */

get_header();

$elena_photo = rdl_get_option('rdl_elena_photo', rdl_get_default_image('elena'));
$elena_quote = rdl_get_option('rdl_elena_quote', 'Per me il benessere non è soltanto un tocco, ma una connessione autentica fatta di ascolto, rispetto e presenza.');
$elena_bio1  = rdl_get_option('rdl_elena_bio_1', 'Per me il benessere non è soltanto un tocco, ma una connessione autentica fatta di ascolto, rispetto e presenza. Questo spazio nasce da un momento importante della mia vita, che mi ha insegnato quanto sia prezioso rallentare e ascoltare i messaggi sottili del corpo.');
$elena_bio2  = rdl_get_option('rdl_elena_bio_2', 'Originaria della Repubblica Dominicana, sono cresciuta con il valore naturale della calda accoglienza e del prendersi cura delle persone. Da anni approfondisco con dedizione le discipline olistiche occidentali e orientali, conseguendo certificazioni in massaggio Californiano, Lomi Lomi, decontratturante miofasciale e digitopressione sui meridiani.');
?>

<main class="w-full pt-20 md:pt-24 bg-[#0f0e0c] min-h-[calc(100vh-80px)]">

    <!-- Hero / Presentazione Elena -->
    <section class="relative w-full overflow-hidden bg-[#141311] py-16 md:py-24 border-b border-[#d4af37]/20">
        <div class="max-w-[1360px] mx-auto px-6 md:px-12 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-7 space-y-6">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-[#1a1916] border border-[#d4af37]/30 text-[#d4af37]">
                    <span class="material-symbols-outlined text-sm">spa</span>
                    <span class="font-label-caps text-xs uppercase tracking-widest">L'Arte del Tocco • San Giustino</span>
                </div>
                <h1 class="font-display-hero text-3xl sm:text-5xl text-[#f5efe6] uppercase tracking-wide leading-tight">
                    L'Arte del Tocco:<br />
                    <span class="text-[#d4af37]">Sono Elena.</span>
                </h1>
                <p class="font-body-lg text-base md:text-lg text-[#dcd5ca] font-light leading-relaxed max-w-2xl">
                    "Per me il benessere non è soltanto un tocco, ma una connessione autentica fatta di ascolto, rispetto e presenza. Questo spazio nasce da un momento importante della mia vita, che mi ha insegnato quanto sia prezioso rallentare e ascoltare i messaggi sottili del corpo."
                </p>
                <div class="flex flex-wrap items-center gap-6 pt-2 text-[#a89f91] text-xs font-label-caps uppercase tracking-wider">
                    <span class="flex items-center gap-1.5 text-[#dcd5ca]"><span class="w-2 h-2 rounded-full bg-[#d4af37]"></span> Origini Repubblica Dominicana</span>
                    <span class="flex items-center gap-1.5 text-[#dcd5ca]"><span class="w-2 h-2 rounded-full bg-[#d4af37]"></span> Certificazioni Olistiche</span>
                    <span class="flex items-center gap-1.5 text-[#dcd5ca]"><span class="w-2 h-2 rounded-full bg-[#d4af37]"></span> Studio a San Giustino</span>
                </div>
            </div>

            <div class="lg:col-span-5 relative">
                <div class="relative w-full max-w-md mx-auto aspect-[3/4] rounded-2xl overflow-hidden shadow-[0_12px_40px_rgba(0,0,0,0.9)] border border-[#d4af37]/35 bg-[#1a1916]">
                    <img alt="Elena - Radici di Luna" class="w-full h-full object-cover" src="<?php echo esc_url($elena_photo); ?>" />
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0f0e0c]/90 via-transparent to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6 p-4 rounded-xl bg-[#141311]/90 backdrop-blur-md border border-[#d4af37]/30 shadow-lg">
                        <p class="font-headline-sm text-xs md:text-sm italic text-[#f5efe6]">
                            "Ogni trattamento è un piccolo invito a fermarsi, respirare e ricordarsi che prendersi cura di sé è un gesto prezioso."
                        </p>
                        <span class="block mt-1 font-label-caps text-[9px] uppercase tracking-widest text-[#d4af37]">— Con amore e dedizione, Elena.</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Manifiesto Multilingue (IT / EN / ES) -->
    <section class="w-full bg-[#141311] py-16 md:py-24 border-b border-[#d4af37]/20" id="manifiesto">
        <div class="max-w-[1080px] mx-auto px-6 md:px-12">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
                <div class="space-y-2 max-w-xl">
                    <span class="font-label-caps text-xs uppercase tracking-widest text-[#d4af37]">Il Mio Percorso • Il Manifesto</span>
                    <h2 class="font-display-hero text-2xl sm:text-4xl text-[#f5efe6]">Nel Cuore di Radici di Luna</h2>
                    <p class="text-sm text-[#a89f91]">Le parole con cui Elena racconta la nascita del suo santuario e la sacralità di ogni incontro olistico.</p>
                </div>

                <!-- Language Selector for the Manifesto -->
                <div class="flex items-center p-1 bg-[#1a1916] rounded-full border border-[#d4af37]/25 shadow-[inset_0_1px_3px_rgba(0,0,0,0.6)] self-start md:self-auto">
                    <button id="tab-it" class="lang-tab px-4 py-2 rounded-full font-label-caps text-xs uppercase transition-all duration-200 bg-[#d4af37] text-[#0f0e0c] font-semibold shadow-sm" type="button" onclick="setLanguage('it')">
                        Italiano (Originale)
                    </button>
                    <button id="tab-en" class="lang-tab px-4 py-2 rounded-full font-label-caps text-xs uppercase text-[#a89f91] hover:text-[#f5efe6] transition-all duration-200" type="button" onclick="setLanguage('en')">
                        English
                    </button>
                    <button id="tab-es" class="lang-tab px-4 py-2 rounded-full font-label-caps text-xs uppercase text-[#a89f91] hover:text-[#f5efe6] transition-all duration-200" type="button" onclick="setLanguage('es')">
                        Español
                    </button>
                </div>
            </div>

            <!-- Content Box with subtle elevation -->
            <div class="relative bg-[#1a1916] rounded-2xl p-8 md:p-14 shadow-[0_14px_40px_-10px_rgba(0,0,0,0.8)] border border-[#d4af37]/25">
                <div class="absolute top-6 right-8 text-[#d4af37]/15 select-none pointer-events-none font-headline-lg text-8xl leading-none">“</div>

                <!-- Italian (Default Active) -->
                <div class="lang-content space-y-6 relative z-10 transition-opacity duration-300 opacity-100" id="content-it">
                    <div class="border-b border-[#d4af37]/25 pb-4">
                        <span class="font-label-caps text-xs uppercase tracking-[0.25em] text-[#d4af37] block">L'Arte del Tocco</span>
                        <h3 class="font-display-hero text-2xl md:text-3xl text-[#f5efe6] mt-1">Sono Elena.</h3>
                    </div>

                    <div class="space-y-4 font-body-lg text-base md:text-lg text-[#d4cdc5] leading-relaxed">
                        <p>
                            Per me il benessere non è soltanto un tocco, ma una connessione autentica fatta di ascolto, rispetto e presenza. Questo spazio nasce da un momento importante della mia vita, che mi ha insegnato quanto sia prezioso rallentare e ascoltare i messaggi sottili del corpo.
                        </p>
                        <p>
                            Originaria della Repubblica Dominicana, sono cresciuta con il valore naturale della calda accoglienza e del prendersi cura delle persone. Da anni approfondisco con dedizione le discipline olistiche occidentali e orientali, conseguendo certificazioni in massaggio Californiano, Lomi Lomi, decontratturante miofasciale e digitopressione sui meridiani.
                        </p>
                        <p>
                            Credo che ogni persona sia unica e che ogni corpo abbia bisogno di attenzioni diverse. Per questo, il mio approccio parte sempre dall'ascolto: conoscere le esigenze, rispettare le sensazioni e scegliere con cura le tecniche più adatte a ogni trattamento.
                        </p>
                        <p>
                            Attraverso le mie mani desidero creare un momento speciale, in cui potersi allontanare dal ritmo frenetico della quotidianità, lasciar andare le tensioni e ritrovare una sensazione di armonia tra corpo e mente.
                        </p>
                    </div>

                    <div class="pt-6 mt-6 border-t border-[#d4af37]/25 space-y-4">
                        <h3 class="font-display-hero text-xl md:text-2xl text-[#d4af37]">Radici di Luna</h3>
                        <div class="space-y-4 font-body-lg text-base md:text-lg text-[#d4cdc5] leading-relaxed">
                            <p>
                                Il mio desiderio è offrire molto più di un semplice massaggio: un'esperienza di benessere, accoglienza e riconnessione con sé stessi.
                            </p>
                            <p>
                                Ogni trattamento è un piccolo invito a fermarsi, respirare e ricordarsi che prendersi cura di sé è un gesto prezioso.
                            </p>
                        </div>
                    </div>

                    <div class="pt-6 mt-6 border-t border-[#d4af37]/20 bg-[#22201c] p-6 rounded-xl flex items-center justify-between">
                        <p class="font-headline-sm text-base md:text-lg italic text-[#f5efe6]">
                            Con amore e dedizione, <span class="text-[#d4af37] font-semibold">Elena.</span>
                        </p>
                        <span class="material-symbols-outlined text-[#d4af37] text-2xl">favorite</span>
                    </div>
                </div>

                <!-- English -->
                <div class="lang-content space-y-6 relative z-10 transition-opacity duration-300 opacity-0 hidden" id="content-en">
                    <div class="border-b border-[#d4af37]/25 pb-4">
                        <span class="font-label-caps text-xs uppercase tracking-[0.25em] text-[#d4af37] block">The Art of Touch</span>
                        <h3 class="font-display-hero text-2xl md:text-3xl text-[#f5efe6] mt-1">I am Elena.</h3>
                    </div>

                    <div class="space-y-4 font-body-lg text-base md:text-lg text-[#d4cdc5] leading-relaxed">
                        <p>
                            For me, wellness is not merely a touch, but an authentic connection forged through listening, respect, and deep presence. This space was born from an important chapter in my life, which taught me how precious it is to slow down and listen to the subtle signals of the body.
                        </p>
                        <p>
                            Originally from the Dominican Republic, I grew up with the natural value of warm hospitality and caring for people. For years I have dedicated myself to studying both Western and Eastern holistic disciplines, earning certifications in Californian massage, Lomi Lomi, myofascial release, and meridian acupressure.
                        </p>
                        <p>
                            I believe that each person is unique and that every body needs different care. That is why my approach always begins with listening: understanding your needs, honoring your sensations, and carefully choosing the most suitable techniques for each treatment.
                        </p>
                        <p>
                            Through my hands, I wish to create a special haven where you can step away from the hectic pace of daily life, release tensions, and rediscover a sense of harmony between body and mind.
                        </p>
                    </div>

                    <div class="pt-6 mt-6 border-t border-[#d4af37]/25 space-y-4">
                        <h3 class="font-display-hero text-xl md:text-2xl text-[#d4af37]">Radici di Luna</h3>
                        <div class="space-y-4 font-body-lg text-base md:text-lg text-[#d4cdc5] leading-relaxed">
                            <p>
                                My desire is to offer much more than a simple massage: an experience of well-being, heartfelt welcome, and reconnection with oneself.
                            </p>
                            <p>
                                Every treatment is a gentle invitation to pause, breathe, and remember that taking care of yourself is a precious gift.
                            </p>
                        </div>
                    </div>

                    <div class="pt-6 mt-6 border-t border-[#d4af37]/20 bg-[#22201c] p-6 rounded-xl flex items-center justify-between">
                        <p class="font-headline-sm text-base md:text-lg italic text-[#f5efe6]">
                            With love and dedication, <span class="text-[#d4af37] font-semibold">Elena.</span>
                        </p>
                        <span class="material-symbols-outlined text-[#d4af37] text-2xl">favorite</span>
                    </div>
                </div>

                <!-- Spanish -->
                <div class="lang-content space-y-6 relative z-10 transition-opacity duration-300 opacity-0 hidden" id="content-es">
                    <div class="border-b border-[#d4af37]/25 pb-4">
                        <span class="font-label-caps text-xs uppercase tracking-[0.25em] text-[#d4af37] block">El Arte del Tacto</span>
                        <h3 class="font-display-hero text-2xl md:text-3xl text-[#f5efe6] mt-1">Soy Elena.</h3>
                    </div>

                    <div class="space-y-4 font-body-lg text-base md:text-lg text-[#d4cdc5] leading-relaxed">
                        <p>
                            Para mí el bienestar no es únicamente un toque, sino una conexión auténtica hecha de escucha, respeto y presencia. Este espacio nace de un momento importante de mi vida, que me enseñó cuán valioso es desacelerar y escuchar los mensajes sutiles del cuerpo.
                        </p>
                        <p>
                            Originaria de la República Dominicana, crecí con el valor natural de la cálida acogida y del cuidar a las personas. Desde hace años profundizo con dedicación en las disciplinas holísticas occidentales y orientales, obteniendo certificaciones en masaje Californiano, Lomi Lomi, descontracturante miofascial y digitopuntura sobre meridianos.
                        </p>
                        <p>
                            Creo que cada persona es única y que cada cuerpo necesita atenciones diferentes. Por eso, mi enfoque parte siempre de la escucha: conocer las necesidades, respetar las sensaciones y elegir con esmero las técnicas más adecuadas para cada tratamiento.
                        </p>
                        <p>
                            A través de mis manos deseo crear un momento especial, en el que poder alejarse del ritmo frenético de la cotidianidad, soltar las tensiones y reencontrar una sensación de armonía entre cuerpo y mente.
                        </p>
                    </div>

                    <div class="pt-6 mt-6 border-t border-[#d4af37]/25 space-y-4">
                        <h3 class="font-display-hero text-xl md:text-2xl text-[#d4af37]">Radici di Luna</h3>
                        <div class="space-y-4 font-body-lg text-base md:text-lg text-[#d4cdc5] leading-relaxed">
                            <p>
                                Mi deseo es ofrecer mucho más que un simple masaje: una experiencia de bienestar, acogida y reconexión consigo mismo.
                            </p>
                            <p>
                                Cada tratamiento es una pequeña invitación a detenerse, respirar y recordar que cuidar de uno mismo es un gesto precioso.
                            </p>
                        </div>
                    </div>

                    <div class="pt-6 mt-6 border-t border-[#d4af37]/20 bg-[#22201c] p-6 rounded-xl flex items-center justify-between">
                        <p class="font-headline-sm text-base md:text-lg italic text-[#f5efe6]">
                            Con amor y dedicación, <span class="text-[#d4af37] font-semibold">Elena.</span>
                        </p>
                        <span class="material-symbols-outlined text-[#d4af37] text-2xl">favorite</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- I Quattro Pilastri / I Valori di Radici di Luna -->
    <section class="max-w-[1360px] mx-auto px-6 md:px-12 py-20 bg-[#0f0e0c]">
        <div class="text-center max-w-2xl mx-auto space-y-3 mb-16">
            <span class="font-label-caps text-xs uppercase tracking-widest text-[#d4af37]">L'Etica del Santuario</span>
            <h2 class="font-display-hero text-3xl sm:text-4xl text-[#f5efe6]">I Valori che Guidano Ogni Gesto</h2>
            <p class="text-sm text-[#a89f91]">L'armonia di Radici di Luna si fonda su quattro principi incrollabili, donati a ciascun ospite sin dal primo respiro nello studio.</p>
        </div>

        <!-- 4 Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Pilastro 1 -->
            <div class="bg-[#1a1916] p-7 rounded-xl space-y-4 flex flex-col justify-between hover:shadow-[0_0_25px_rgba(212,175,55,0.2)] border border-[#d4af37]/25 hover:border-[#d4af37] transition-all duration-300 group">
                <div class="space-y-3">
                    <div class="w-12 h-12 rounded-full bg-[#22201c] border border-[#d4af37]/30 flex items-center justify-center text-[#d4af37] group-hover:bg-[#d4af37] group-hover:text-[#0f0e0c] transition-colors duration-300 shadow-sm">
                        <span class="material-symbols-outlined text-2xl">solar_power</span>
                    </div>
                    <span class="font-label-caps text-[10px] uppercase tracking-widest text-[#a89f91]">01. Origini & Cuore</span>
                    <h3 class="font-headline-sm text-lg text-[#f5efe6]">Accoglienza & Calore Umano</h3>
                    <p class="text-xs text-[#d4cdc5] leading-relaxed">
                        Eredità vivente della tradizione dominicana: aprire le porte significa accogliere con affetto autentico, eliminando ogni tensione formale per farti sentire al sicuro.
                    </p>
                </div>
                <div class="pt-2 flex items-center gap-2 text-[#d4af37] font-label-caps text-[11px] uppercase">
                    <span>Ospitalità Ancestrale</span>
                </div>
            </div>

            <!-- Pilastro 2 -->
            <div class="bg-[#1a1916] p-7 rounded-xl space-y-4 flex flex-col justify-between hover:shadow-[0_0_25px_rgba(212,175,55,0.2)] border border-[#d4af37]/25 hover:border-[#d4af37] transition-all duration-300 group">
                <div class="space-y-3">
                    <div class="w-12 h-12 rounded-full bg-[#22201c] border border-[#d4af37]/30 flex items-center justify-center text-[#d4af37] group-hover:bg-[#d4af37] group-hover:text-[#0f0e0c] transition-colors duration-300 shadow-sm">
                        <span class="material-symbols-outlined text-2xl">hearing</span>
                    </div>
                    <span class="font-label-caps text-[10px] uppercase tracking-widest text-[#a89f91]">02. Spazio Sacro</span>
                    <h3 class="font-headline-sm text-lg text-[#f5efe6]">Presenza & Ascolto Empatico</h3>
                    <p class="text-xs text-[#d4cdc5] leading-relaxed">
                        Prima di iniziare il rituale, il silenzio e la parola trovano equilibrio. Elena ascolta i bisogni fisici ed emotivi del momento, accordando le mani con la tua energia.
                    </p>
                </div>
                <div class="pt-2 flex items-center gap-2 text-[#d4af37] font-label-caps text-[11px] uppercase">
                    <span>Sintonizzazione Unica</span>
                </div>
            </div>

            <!-- Pilastro 3 -->
            <div class="bg-[#1a1916] p-7 rounded-xl space-y-4 flex flex-col justify-between hover:shadow-[0_0_25px_rgba(212,175,55,0.2)] border border-[#d4af37]/25 hover:border-[#d4af37] transition-all duration-300 group">
                <div class="space-y-3">
                    <div class="w-12 h-12 rounded-full bg-[#22201c] border border-[#d4af37]/30 flex items-center justify-center text-[#d4af37] group-hover:bg-[#d4af37] group-hover:text-[#0f0e0c] transition-colors duration-300 shadow-sm">
                        <span class="material-symbols-outlined text-2xl">fingerprint</span>
                    </div>
                    <span class="font-label-caps text-[10px] uppercase tracking-widest text-[#a89f91]">03. Metodo Artigianale</span>
                    <h3 class="font-headline-sm text-lg text-[#f5efe6]">Rispetto & Cura Sartoriale</h3>
                    <p class="text-xs text-[#d4cdc5] leading-relaxed">
                        Nessun protocollo rigido o standardizzato. Ogni pressione, sfioramento o trazione viene modulato sul respiro della persona, rispettando tempi, limiti e sensibilità.
                    </p>
                </div>
                <div class="pt-2 flex items-center gap-2 text-[#d4af37] font-label-caps text-[11px] uppercase">
                    <span>Personalizzazione Totale</span>
                </div>
            </div>

            <!-- Pilastro 4 -->
            <div class="bg-[#1a1916] p-7 rounded-xl space-y-4 flex flex-col justify-between hover:shadow-[0_0_25px_rgba(212,175,55,0.2)] border border-[#d4af37]/25 hover:border-[#d4af37] transition-all duration-300 group">
                <div class="space-y-3">
                    <div class="w-12 h-12 rounded-full bg-[#22201c] border border-[#d4af37]/30 flex items-center justify-center text-[#d4af37] group-hover:bg-[#d4af37] group-hover:text-[#0f0e0c] transition-colors duration-300 shadow-sm">
                        <span class="material-symbols-outlined text-2xl">psychiatry</span>
                    </div>
                    <span class="font-label-caps text-[10px] uppercase tracking-widest text-[#a89f91]">04. Materia Botanica</span>
                    <h3 class="font-headline-sm text-lg text-[#f5efe6]">Purezza degli Elementi</h3>
                    <p class="text-xs text-[#d4cdc5] leading-relaxed">
                        Uso esclusivo di oli vegetali biologici spremuti a freddo, oli essenziali puri, candele aromatiche alla soia e sali minerali formulati per nutrire in armonia con le fasi lunari.
                    </p>
                </div>
                <div class="pt-2 flex items-center gap-2 text-[#d4af37] font-label-caps text-[11px] uppercase">
                    <span>Fitoterapia Olistica</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Editorial Split: Lo Spazio & L'Esperienza con Elena -->
    <section class="w-full bg-[#141311] py-20 border-t border-[#d4af37]/20">
        <div class="max-w-[1360px] mx-auto px-6 md:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left Visual Collage -->
                <div class="lg:col-span-6 grid grid-cols-2 gap-4">
                    <div class="space-y-4">
                        <div class="rounded-xl overflow-hidden shadow-md bg-[#1a1916] aspect-[4/5] border border-[#d4af37]/25">
                            <img class="w-full h-full object-cover" alt="Oli Botanici Radici di Luna" src="<?php echo esc_url(rdl_get_default_image('oil_pour')); ?>" />
                        </div>
                        <div class="p-5 rounded-xl bg-[#1a1916] shadow-md border border-[#d4af37]/25 space-y-1">
                            <span class="font-display-hero text-2xl text-[#d4af37] font-bold">100%</span>
                            <p class="text-xs text-[#d4cdc5]">Tempo dedicato solo a te. Una sola persona per sessione per garantire totale quiete.</p>
                        </div>
                    </div>
                    <div class="space-y-4 pt-6">
                        <div class="p-5 rounded-xl bg-[#22201c] text-[#f5efe6] shadow-md border border-[#d4af37]/35 space-y-1">
                            <span class="material-symbols-outlined text-[#d4af37] text-2xl">dark_mode</span>
                            <h4 class="font-title-editorial text-base text-[#f5efe6]">Armonia Lunare</h4>
                            <p class="text-xs text-[#d4cdc5]">Trattamenti coordinati alle fasi della luna per amplificare drenaggio o distensione.</p>
                        </div>
                        <div class="rounded-xl overflow-hidden shadow-md bg-[#1a1916] aspect-[4/5] border border-[#d4af37]/25">
                            <img class="w-full h-full object-cover" alt="Cabina Trattamento Radici di Luna" src="<?php echo esc_url(rdl_get_default_image('studio_room')); ?>" />
                        </div>
                    </div>
                </div>

                <!-- Right Narrative -->
                <div class="lg:col-span-6 space-y-6">
                    <span class="font-label-caps text-xs uppercase tracking-widest text-[#d4af37]">L'Esperienza Nello Studio</span>
                    <h2 class="font-display-hero text-3xl sm:text-4xl text-[#f5efe6]">Uno Spazio Senza Tempo</h2>
                    <p class="text-sm md:text-base text-[#dcd5ca] font-light leading-relaxed">
                        Varcare la soglia di Radici di Luna significa lasciare fuori il rumore e la frenesia quotidiana. Qui a San Giustino il tempo rallenta. La luce calda delle candele, il profumo degli incensi naturali e la musica rilassante creano un'atmosfera protetta dove poterti finalmente concedere un momento tutto tuo.
                    </p>
                    <p class="text-xs md:text-sm text-[#a89f91] leading-relaxed">
                        Prima di iniziare, ti accoglierò con una tisana aromatica per scambiare due parole e comprendere insieme quale sia il trattamento più adatto al tuo stato del momento.
                    </p>

                    <div class="pt-4 flex flex-col sm:flex-row gap-4">
                        <?php
                        $prenota_page = get_page_by_path('prenota');
                        $prenota_url = $prenota_page ? get_permalink($prenota_page) : home_url('/#prenotazione');
                        ?>
                        <a class="px-8 py-3.5 rounded-full bg-[#d4af37] text-[#0f0e0c] font-bold font-label-caps text-xs uppercase tracking-wider hover:bg-[#f2ca50] transition-all text-center shadow-[0_0_15px_rgba(212,175,55,0.25)]" href="<?php echo esc_url($prenota_url); ?>">
                            Prenota il Tuo Incontro
                        </a>
                        <a class="px-8 py-3.5 rounded-full border border-[#d4af37]/40 text-[#d4af37] hover:bg-[#d4af37]/10 font-label-caps text-xs uppercase tracking-wider transition-all text-center" href="<?php echo esc_url(rdl_get_whatsapp_url('Buongiorno Elena, vorrei prenotare un momento di quiete con te.')); ?>" target="_blank" rel="noopener">
                            Scrivi su WhatsApp
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
