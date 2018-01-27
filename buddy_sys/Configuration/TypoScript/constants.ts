
plugin.tx_buddysys_information {
    view {
        # cat=plugin.tx_buddysys_information/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:buddy_sys/Resources/Private/Templates/
        # cat=plugin.tx_buddysys_information/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:buddy_sys/Resources/Private/Partials/
        # cat=plugin.tx_buddysys_information/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:buddy_sys/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_buddysys_information//a; type=string; label=Default storage PID
        storagePid =
    }
}

plugin.tx_buddysys_management {
    view {
        # cat=plugin.tx_buddysys_management/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:buddy_sys/Resources/Private/Templates/
        # cat=plugin.tx_buddysys_management/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:buddy_sys/Resources/Private/Partials/
        # cat=plugin.tx_buddysys_management/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:buddy_sys/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_buddysys_management//a; type=string; label=Default storage PID
        storagePid =
    }
}
