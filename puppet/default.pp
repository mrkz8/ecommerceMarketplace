if versioncmp($::puppetversion,'3.6.1') >= 0 {
    $allow_virtual_packages = hiera('allow_virtual_packages',false)
    Package {
      allow_virtual => $allow_virtual_packages,
    }
}

class pkgsextra{
    #por estructura paso estos paquetes a que se instalen por puppet y no por bash
    package { ['curl', 'ant', 'tar','java-1.7.0-openjdk-devel','java-1.7.0-openjdk','nano'] :
        ensure  => present,
    }
}

include pkgsextra
